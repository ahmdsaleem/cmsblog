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
            <h2 class="text-center">Create a new Tag</h2>
        </div>

        <div class="panel-body">
            <form action="{{ route('tag.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Tag_name">Tag Name</label>
                    <input type="text" name="tag" class="form-control" required>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn-lg btn-success">Submit</button>
                    </div>
                </div>


            </form>
        </div>

    </div>

@endsection