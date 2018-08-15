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
            <h2 class="text-center">Edit Your Profile</h2>
        </div>

        <div class="panel-body">
            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">User Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="avatar">Upload New Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="about">About me</label>
                    <textarea name="about" id="about" cols="6" rows="10" value="{{ $user->profile->about }}" class="form-control"></textarea>
                </div>


                <div class="form-group">
                    <label for="facebook">Facebook Link</label>
                    <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube Link</label>
                    <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">
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