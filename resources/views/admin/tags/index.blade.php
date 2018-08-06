@extends('layouts.app')


@section('content')


    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">

                <thead>

                <th>
                    Tag Name
                </th>
                <th>
                    Operations
                </th>


                </thead>

                <tbody>

                @if($tags->count() > 0)

                @foreach($tags as $tag)
                    <tr>
                        <td>
                            {{ $tag->tag }}
                        </td>
                        <td>
                           <a href="{{ route('tag.edit', ['id' => $tag->id ]) }}"><i class="fas fa-edit"></i> </a>
                            <a href="{{ route('tag.delete', ['id' => $tag->id ]) }}"> <i class="fas fa-trash-alt text-danger"></i></a>
                        </td>

                    </tr>
                @endforeach

                    @else
                    <tr>
                        <th colspan="5" class="text-center"> No Tags added</th>
                    </tr>

                    @endif
                </tbody>

            </table>
        </div>

    </div>




@endsection