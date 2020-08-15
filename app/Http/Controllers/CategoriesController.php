<?php

namespace App\Http\Controllers;

use App\Category;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;


class CategoriesController extends Controller
{
    use ImageUpload;

    public function __construct()
    {
        View::share('categories', Category::withCount('posts')->get());
    }

    public function create()
    {
        return view("admin.createcategory");
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'          => 'required|min:3',
                'cover_image'   => 'image'
            ]
        );

        $fileNameToStore = $this->handleImageUpload($request, 'cover_image', 'public/categories');

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput($request->all());
        }

        Category::create([
            'name' => $request->name,
            'cover_image' => $fileNameToStore
        ]);

        return redirect()->route('adminCategories')->with([
            'success' => 'Category was Created Successfully'
        ]);
        
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
        return view('admin.editcategory')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|min:3'
            ]
        );
        if($validator->fails()) {
            return back()->withErrors($validator);
        }
        $category->update($request->all());
        return redirect()->route('adminCategories')->with([
            'success' => 'Category was Updated Successfully'
        ]);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('adminCategories')->with([
            'success' => 'Category Deleted Successfully'
        ]);
    }

    public function adminCategories()
    {
        $categories = Category::get();
        return view('admin.categories')->with('categories', $categories);
    }
}
