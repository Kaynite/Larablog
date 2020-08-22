<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PagesController extends Controller
{

    public function adminPages()
    {
        $pages = Page::select('id', 'title', 'slug', 'created_by')
            ->orderBy("id", "desc")
            ->paginate(10);
        return view('admin.pages.pages')->with('pages', $pages);
    }

    public function create()
    {
        return view('admin.pages.createpage');
    }

    public function store(Request $request)
    {
        $request['slug'] = $this->createSlug('slug', $request->title);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'slug'  => 'unique:pages|max:255',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            Page::create([
                'title'         => $request->title,
                'slug'          => $request->slug,
                'body'          => $request->body,
                'description'   => $request->description,
                'created_by'    => Auth::user()->id
            ]);
            return redirect()
                ->route('adminPages')
                ->with('message', 'Page was Created Successfully');
        }
    }

    public function show($slug)
    {
        View::share('categories', Category::withCount('posts')->get());
        $page = Page::where('slug', $slug)->first();
        return $page ? view('page')->with('page', $page) : abort(404);
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.editpage')->with('page', $page);
    }

    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'slug'  => ['required', Rule::unique('pages')->ignore($page->id),],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            $page->update([
                'title'         => $request->title,
                'slug'          => $request->slug,
                'body'          => $request->body,
                'description'   => $request->description,
            ]);
            return redirect()
                ->route('adminPages')
                ->with('message', 'Page was Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        return redirect()
            ->route('adminPages')
            ->with('message', 'Page Was Deleted Successfully');
    }

    public function createSlug($input_field, $title)
    {
        $slug = Str::slug($title);
        $rows = Page::select('slug')->where($input_field, 'like', "$slug%")->count();
        if($rows) {
            return $slug . '-' . $rows++;
        } else {
            return $slug;
        }
    }
}
