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
            <h2 class="text-center">Update Tag : {{ $tag->tag }}</h2>
        </div>

        <div class="panel-body">
            <form action="{{ route('tag.update',['id' => $tag->id ]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Tag Name">Tag Name</label>
                    <input type="text" name="tag" value="{{ $tag->tag }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn-lg btn-success">Update Tag</button>
                    </div>
                </div>


            </form>
        </div>

    </div>

@endsection