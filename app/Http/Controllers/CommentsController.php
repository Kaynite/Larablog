<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::approved()
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.comments.comments')->with('comments', $comments);
    }

    public function pending()
    {
        $comments = Comment::pending()
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.comments.pendingcomments')->with('comments', $comments);
    }

    public function trash()
    {
        $comments = Comment::onlyTrashed()
            ->orderBy('deleted_at', 'desc')
            ->paginate(10);
        return view('admin.comments.trashcomments')->with('comments', $comments);
    }

    public function store(Request $request, $post_id)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'comment_body' => 'required',
                'comment_by' => 'required'
            ]);
    
            if ($validator->fails()) {
                $data = [];
                $data['status'] = 'V_ERR';
                $data['messages'] = $validator->errors();
                return response()->json($data);
            }
            
            $comment = Comment::create([
                "comment_body"  => $request->comment_body,
                "comment_by"    => $request->comment_by,
                "email"         => $request->email,
                "website"       => $request->website,
                "post_id"       => $post_id,
                "approved"      => config('blog.comments_approval')
            ]);
            
            if ($comment->approved)
                $body = view('components.ajaxComment')->with('comment', $comment)->render();
            else
                $body = null;
                
            return response()->json([
                'status'    => 'success',
                'message'   => 'Your comment was submitted successfully and waits approval!',
                'body'      => $body
            ]);
        }
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('admin.comments.editcomment')->with('comment', $comment);
    }

    public function approve($id)
    {
        $comment = Comment::pending()->findOrFail($id);
        $comment->approved = 1;
        $comment->save();
        return redirect()->route('adminCommentsPending')
            ->with('message', "Comment #{$comment->id} Approved Successfully");
    }

    public function restore($id)
    {
        $comment = Comment::onlyTrashed()->findOrFail($id);
        $comment->restore();
        return redirect()->route('adminComments');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $vaildator = Validator::make($request->all(),
        [
            'comment_by'    => 'required',
            'comment_body'  => 'required'
        ]);

        if ($vaildator->fails()) {
            return back()->withErrors($vaildator);
        } else {
            $comment->update([
                'comment_by'    => $request->comment_by,
                'comment_body'  => $request->comment_body,
                'email'         => $request->email,
                'website'         => $request->website,
            ]);
            return redirect()
                ->route('adminComments')
                ->with('message', 'Comment was edited successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return back();
    }

    public function forceDelete($id)
    {
        $comment = Comment::onlyTrashed()->findOrFail($id);
        $comment->forceDelete();
        return redirect()->route('adminCommentsTrash')
            ->with('message', 'The Comment Was Deleted Successfully');
    }
}
