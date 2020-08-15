<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\PostViews;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class PostsController extends Controller
{

    public function __construct()
    {
        View::share('categories', Category::all());
    }

    public function index()
    {
        $posts = Post::orderBy("id", "desc")->get();
        $hotPosts = Post::select("id", "title", "author", "category_id", "created_at")->where("hot", 1)->limit(3)->orderBy("id", "desc")->get();
        return view("blog")->with(["posts" => $posts, "hotPosts" => $hotPosts]);
    }



    public function create()
    {
        $categories = Category::get();
        return view("admin.createpost")->with("categories", $categories);
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
            "image"         => "",
            "hot"           => $request->hot
        ]);
        return redirect()->route("adminPosts");
    }

    public function show($id)
    {
        $categories = Category::withCount('posts')->get();
        $post = Post::findOrFail($id);
        event(new PostViews($post)); // Post Views Event
        return view("post")->with('post', $post)
        ->with('categories', $categories);
    }

    public function edit($id)
    {
        $categories = Category::get();
        $post = Post::findOrFail($id);
        return view("admin.editpost")
            ->with([
                "post" => $post,
                "categories" => $categories
            ]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if ($post) {
            $validator = Validator::make(
                $request->all(),
                [
                    "title"         => "required",
                    "body"          => "required",
                    "category_id"   => "required",
                    "hot"           => "numeric"
                ]
            );
        }

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $post->update($request->all());
        return redirect()->route("adminEditPost", $id)->with("success", "Post Updated Successfully");
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();
        return back()->with(["message" => "Post was Deleted Successfully"]);
    }

    public function adminPosts()
    {
        $posts = Post::select("id", "title", "category_id", "author", "views", "created_at")
            ->orderBy("id", "desc")->get();

        return view("admin.posts")->with("posts", $posts);
    }
}
