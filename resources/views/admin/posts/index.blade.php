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
                    Title
                </th>
                <th>
                    Operations
                </th>


                </thead>

                <tbody>

                @if($posts->count() > 0)

                @foreach($posts as $post)
                    <tr>
                        <td>
                            <img src="/storage/{{ $post->featured }}" alt="{{ $post->title }}" width="50px" height="50px">
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            <a href="{{ route('post.edit', ['id' => $post->id ]) }}"><i class="fas fa-edit"></i> </a>
                            <a href="{{ route('post.delete', ['id' => $post->id ]) }}"> <i class="fas fa-trash-alt text-danger"></i></a>
                        </td>

                    </tr>
                @endforeach

                    @else

                    <tr>
                        <th colspan="5" class="text-center"> No Posts are added</th>
                    </tr>

                    @endif
                </tbody>

            </table>
        </div>

    </div>




@endsection