<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\PostViews;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy("id", "desc")->get();
        $hotPosts = Post::select("id", "title", "author", "category_id", "created_at")->where("hot", 1)->limit(3)->orderBy("id", "desc")->get();
        return view("blog")->with(["posts" => $posts, "hotPosts" => $hotPosts]);
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
        $post = Post::findOrFail($id);
        event(new PostViews($post)); // Post Views Event
        return view("post", compact("post"));
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
