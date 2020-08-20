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
        return view('admin.comments')->with('comments', $comments);
    }

    public function pending()
    {
        $comments = Comment::pending()
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.pendingcomments')->with('comments', $comments);
    }

    public function trash()
    {
        $comments = Comment::onlyTrashed()
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('admin.comments')->with('comments', $comments);
    }

    public function store(Request $request, $post_id)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required',
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        Comment::create([
            "comment_body"  => request("message"),
            "comment_by"    => request("name"),
            "post_id"       => $post_id
        ]);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('admin.editcomment')->with('comment', $comment);
    }

    public function approve($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->approved = 1;
        $comment->save();
        return redirect()->route('adminCommentsPending')
            ->with('message', "Comment #{$comment->id} Approved Successfully");
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        if ($comment) {
            $comment->delete();
            return back();
        } else {
            return back();
        }
    }
}
