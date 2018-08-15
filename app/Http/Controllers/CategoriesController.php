<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{

    public function index()
    {
        $categories= Category::all();
        return view('admin.categories.index')->with('categories',$categories);

    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $category= new Category;
        $category->name= $request->name;
        $category->save();
       // Session::flash('success','You have Successfully Created a Category');
        return redirect()->route('categories');
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $category=Category::find($id);
        $category->name=$request->name;
        $category->save();
        //Session::flash('success','You have Successfully Updated a Category');
        return redirect()->route('categories');


    }


    public function destroy($id)
    {
        $category=Category::find($id);

        foreach ($category->posts as $post)
        {
            $post->delete();
        }


        $category->delete();
       // Session::flash('success','You have Successfully deleted a Category');
        return redirect()->route('categories');

        //
    }
}
