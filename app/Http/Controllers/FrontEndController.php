<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Setting;
use App\Tag;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){

        return view('index')->with('title',Setting::first()->site_name)
                                 ->with('categories',Category::all())
                                 ->with('first_post',Post::orderBy('created_at','desc')->first())
                                 ->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                                 ->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
                                 ->with('categories',Category::all())
                                 ->with('contact_number', Setting::first()->contact_number)
                                 ->with('contact_email', Setting::first()->contact_email)
                                 ->with('address', Setting::first()->address);
    }



    public function show($slug)
    {
        $post = Post::where('slug',$slug)->first();

        $next_id = Post::where('id','>',$post->id)->min('id');
        $prev_id= Post::where('id','<',$post->id)->max('id');


        return view('show')->with('post',$post)
                                ->with('title',Setting::first()->site_name)
                                ->with('categories',Category::all())
                                ->with('tags', Tag::all())
                                ->with('contact_number', Setting::first()->contact_number)
                                ->with('contact_email', Setting::first()->contact_email)
                                ->with('address', Setting::first()->address)
                                ->with('next',Post::find($next_id))
                                ->with('prev',Post::find($prev_id));


    }
}
