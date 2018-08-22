<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home')
                    ->with('user_count',User::all()->count())
                    ->with('post_count',Post::all()->count())
                    ->with('tag_count',Tag::all()->count())
                    ->with('category_count',Category::all()->count());

    }
}
