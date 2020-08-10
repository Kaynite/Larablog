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
        $category = Category::find($id);
        $posts =  Post::whereHas('category', function($q) use($id) {
            $q->where("category_id", $id);
        })->whereHas('comments')->orderBy("id", "desc")->get();
        return view("category")->with(["posts" => $posts, "category" => $category]);
    }

    public function edit($id)
    {
        
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
        //
    }
}
