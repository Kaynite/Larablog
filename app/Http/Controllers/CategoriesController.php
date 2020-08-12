<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getAll()
    {
    }

    public function create()
    {
        return view("admin.create");
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        /*
        Note: Replaced this code with the code below
        $category = Category::find($id);
        $posts =  Post::whereHas('category', function($q) use($id) {
            $q->where("category_id", $id);
        })->whereHas('comments')->orderBy("id", "desc")->get();
        return view("category")->with(["posts" => $posts, "category" => $category]);
        */

        // New Enhanced Code Using hasMany Relationship
        $category = Category::findOrFail($id);
        return view("category")->with("category", $category);
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return $category;
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


    public function adminCategories()
    {
        $categories = Category::get();
        return $categories;
    }
}
