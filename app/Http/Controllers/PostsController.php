<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\PostViews;
use App\Post;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class PostsController extends Controller
{

    use ImageUpload;

    public function __construct()
    {
        View::share('categories', Category::withCount('posts')->get());
    }

    public function index(Request $request)
    {
        if ($request->s) {
            $posts = $this->search($request->s);
        } else {
            $posts = Post::orderBy("id", "desc")->get();
        }
        $hotPosts = Post::select("id", "title", "author", "category_id", "created_at", "image")->where("hot", 1)->limit(3)->orderBy("id", "desc")->get();
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
                "category_id"   => "required",
                "image"         => "image|required|max:1999"
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput($request->all());
        }

        $image = $this->handleImageUpload($request, 'image', 'public/posts');

        Post::create([
            "title"         => $request->title,
            "body"          => $request->body,
            "category_id"   => $request->category_id,
            "author"        => Auth::user()->id,
            "image"         => $image,
            "hot"           => $request->hot
        ]);
        return redirect()->route("adminPosts")->with('success', 'Post was Created Successfully');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        event(new PostViews($post)); // Post Views Event
        $prevPost = $this->prevPost($id);
        $nextPost = $this->nextPost($id);
        $relatedPosts = $this->relatedPosts($post->category_id);
        return view("post")->with([
            "post"          => $post,
            "prevPost"      => $prevPost,
            "nextPost"      => $nextPost,
            "relatedPosts"  => $relatedPosts
        ]);
    }

    public function edit($id)
    {
        $categories = Category::get();
        $post = Post::findOrFail($id);
        return view("admin.editpost")->with([
            "post"          => $post,
            "categories"    => $categories,
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
                    "hot"           => "numeric",
                    "image"         => "image|nullable"
                ]
            );
        }

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $image = $this->handleImageUpload($request, 'image', 'public/posts');

        if ($image) {
            Storage::delete("public/posts/" . $post->image);
        } else {
            $image = $post->image;
        }

        $post->update([
            "title"         => $request->title,
            "body"          => $request->body,
            "category_id"   => $request->category_id,
            "image"         => $image,
            "hot"           => $request->hot
        ]);

        return redirect()->route("adminEditPost", $id)->with("success", "Post Updated Successfully");
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        isset($post->image) ? Storage::delete("public/posts/" . $post->image) : "";
        $post->delete();
        return back()->with(["message" => "Post was Deleted Successfully"]);
    }

    public function adminPosts()
    {
        $posts = Post::select("id", "title", "category_id", "author", "views", "created_at")
            ->orderBy("id", "desc")->get();
        return view("admin.posts")->with("posts", $posts);
    }

    public function search($word)
    {
        if (!$word) {
            return abort(404);
        }
        return $posts = Post::where('title', 'like', "%$word%")->get();
    }

    private function prevPost($id)
    {
        return Post::select('id', 'title', 'image')
            ->where('id', '<', $id)
            ->orderBy('id', 'desc')
            ->first();
    }

    private function nextPost($id)
    {
        return Post::select('id', 'title', 'image')
            ->where('id', '>', $id)
            ->orderBy('id')
            ->first();
    }

    private function relatedPosts($categoryId)
    {
        return Post::inRandomOrder('id', 'title', 'image', 'created_at', 'category_id', 'author')->select()->where('category_id', $categoryId)->limit(3)->get();
    }


    public function testScopes() {
        return Post::get();
    }
}
