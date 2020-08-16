<?php

namespace App\Http\Controllers;

use App\Category;
use App\Traits\ImageUpload;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class UsersController extends Controller
{
    use ImageUpload;

    public function __construct()
    {
        View::share('categories', Category::withCount('posts')->get());
    }

    public function updateProfile(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);

        $image = $this->handleImageUpload($request, 'image', 'public/users');

        if ($image) {
            Storage::delete("public/users/" . Auth::user()->image);
        } else {
            $image = Auth::user()->image;
        }
        
        $user->update([
            'username'  => $request->username,
            'email'     => $request->email,
            'image'     => $image,
            'about'     => $request->about
        ]);

        return redirect()->back();
    }

    public function author($id) {
        $author = User::select('id', 'username', 'image', 'about')->findOrFail($id);
        return view('author')->with('author', $author);
    }
}
