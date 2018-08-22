<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

    public function index()
    {
        $posts= Post::all();
        return view('admin.posts.index')->with('posts',$posts);
    }


    public function create()
    {
        $categories= Category::all();
        return view('admin.posts.create')->with('categories',$categories)->with('tags',Tag::all());
    }


    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request,[
            'title' => 'required|max:1000',
            'featured' => 'image',
            'content' => 'required',
            'category_id'=> 'required'
        ]);


        if($request->hasFile('featured'))
        {
            $featured= $request->featured;
            $path = $request->file('featured')->store('public/uploads/posts');
            $featured_new_name=substr($path,6);
        }
        else
        {
            $featured_new_name='/uploads/posts/ca5a9TtulnusJGFDKITj5uj0wAAiVZrWlU7JZTx9.jpeg';
        }

        $post=Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => $featured_new_name,
            'category_id' => $request->category_id,
            'slug' => str_slug($request->title),
            'user_id' => Auth::user()->id
        ]);

       $post->tags()->attach($request->tags);

        return redirect()->route('home');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $post=Post::find($id);
        return view('admin.posts.edit')->with('post', $post)->with('categories',Category::all())->with('tags',Tag::all());
    }


    public function update(Request $request, $id)
    {
        $post=Post::find($id);

        if($request->hasFile('featured'))
        {
            $featured= $request->featured;
            $path = $request->file('featured')->store('public/uploads/posts');
            $featured_new_name=substr($path,6);
            $post->featured=$featured_new_name;

        }

        $post->title=$request->title;
        $post->content= $request->content;
        $post->category_id=$request->category_id;

        $post->save();

        $post->tags()->sync($request->tags);
        return redirect()->route('posts');

    }


    public function destroy($id)
    {
        $post= Post::find($id);
        $post->delete();

        return redirect()->route('posts');
    }
}
