<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy("id", "desc")->get();
        return view("blog")->with("posts", $posts);
    }

    public function create()
    {
        $categories = Category::get();
        return view("admin.create")->with("categories", $categories);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "title"         => "required",
                "body"          => "required",
                "category_id"   => "required"
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput($request->all());
        }

        Post::create([
            "title"         => $request->title,
            "body"          => $request->body,
            "category_id"   => $request->category_id,
            "author"        => "Kareem",
            "image"         => ""
        ]);
        return redirect("/blog");
    }

    public function show($id)
    {
        if (!is_numeric($id)) {
            return abort(404);
        } else {
            $post = Post::find($id);
            if (!empty($post)) {
                return view("post", compact("post"));
            } else {
                return abort(404);
            }
        }
    }

    public function edit($id)
    {
    }

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
        //
    }
}
