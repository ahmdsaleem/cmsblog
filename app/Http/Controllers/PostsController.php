<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        $categories= Category::all();
        return view('admin.posts.create')->with('categories',$categories);
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:1000',
            'featured' => 'required|image',
            'content' => 'required',
            'category_id'=> 'required'
        ]);


     dd($request->all());
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
