@extends('layouts.app')


@section('content')


    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">

                <thead>

                <th>
                    Image
                </th>
                <th>
                    Name
                </th>
                <th>
                    Permissions
                </th>

                <th>
                    Operations
                </th>


                </thead>

                <tbody>

                @if($users->count() > 0)

                @foreach($users as $user)
                    <tr>
                        <td>
                            <img src="/storage/{{ $user->profile->avatar }}" alt="{{ $user->name }}" width="50px" height="50px" style="border-radius:50%">
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>

                        <td>

                            @if($user->admin)
                                Admin
                                <a href="{{ route('user.not.admin',['id' => $user->id]) }}" class="btn btn-xs btn-danger">Remove Admin</a>
                            @else
                                <a href="{{ route('user.admin',['id' => $user->id]) }}" class="btn btn-xs btn-success">Make Admin</a>
                            @endif


                        </td>

                        <td>
                            {{--<a href="{{ route('user.edit', ['id' => $user->id ]) }}"><i class="fas fa-edit"></i> </a>--}}
                            <a href="{{ route('user.delete', ['id' => $user->id ]) }}"> <i class="fas fa-trash-alt text-danger"></i></a>
                        </td>

                    </tr>
                @endforeach

                    @else

                    <tr>
                        <th colspan="5" class="text-center"> No Users are added</th>
                    </tr>

                    @endif
                </tbody>

            </table>
        </div>

    </div>




@endsection