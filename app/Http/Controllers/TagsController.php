<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Tag;
class TagsController extends Controller
{

    public function index()
    {
     return view('admin.tags.index')->with('tags',Tag::all());
    }

    public function create()
    {
        return view('admin.tags.create');
    }


    public function store(Request $request)
    {
        $tag=Tag::create([
            'tag' => $request->tag
        ]);

        $tag->save();

        return redirect()->route('tags');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        return view('admin.tags.edit')->with('tag',Tag::find($id));
    }


    public function update(Request $request, $id)
    {
        $tag= Tag::find($id);
        $tag->tag=$request->tag;

        $tag->save();

        return redirect()->route('tags');
    }


    public function destroy($id)
    {
        $tag=Tag::find($id);
        $tag->delete();

        return redirect()->route('tags');
    }
}
