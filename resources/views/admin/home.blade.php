@extends('layouts.app')

@section('content')

    <div class="col-md-3">
        <div class="panel panel-info">
            <div class="panel-heading">
               <h5 class="text-center"> Published Posts</h5>
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $post_count }}</h1>
            </div>


        </div>

    </div>
    <div class="col-md-3">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="text-center"> Users</h5>
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $user_count }}</h1>
            </div>


        </div>

    </div>
    <div class="col-md-3">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="text-center"> Categories</h5>
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $category_count }}</h1>
            </div>


        </div>

    </div>
    <div class="col-md-3">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="text-center"> Tags</h5>
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $tag_count }}</h1>
            </div>


        </div>

    </div>


@endsection
