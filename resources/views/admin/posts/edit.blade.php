@extends('layouts.app')


@section('content')

    @if(count($errors)>0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>


            @endforeach

        </ul>



    @endif




    <div class="panel">
        <div class="panel-heading">
            <h2 class="text-center">Editing Post {{ $post->title }}/h2>
        </div>

        <div class="panel-body">
            <form action="{{ route('post.update',['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Select Categories</label>
                    <select class="form-control" name="category_id" id="category">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if($post->category_id == $category->id)
                            selected
                                    @endif
                            >{{ $category->name }}
                            </option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags">Select Tags</label>
                    <br/>
                    @foreach($tags as $tag)

                        <label class="checkbox-inline"><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                            @foreach($post->tags as $t)

                                @if($tag->id == $t->id)
                                    checked
                                    @endif
                                @endforeach
                            >{{ $tag->tag }}</label>

                    @endforeach
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="10" class="form-control"> {{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn-lg btn-success">Update Post</button>
                    </div>
                </div>


            </form>
        </div>

    </div>

@endsection