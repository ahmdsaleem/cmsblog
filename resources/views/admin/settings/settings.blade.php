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
            <h2 class="text-center">Update Your Settings</h2>
        </div>

        <div class="panel-body">
            <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Site Name</label>
                    <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Contact Email</label>
                    <input type="email" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">Contact Number</label>
                    <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="youtube">Address</label>
                    <input type="text" name="address" value="{{ $settings->address }}" class="form-control">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn-lg btn-success">Update site Settings</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

@endsection