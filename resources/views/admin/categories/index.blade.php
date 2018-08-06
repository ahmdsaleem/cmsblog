@extends('layouts.app')


@section('content')


    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">

                <thead>

                <th>
                    Category Name
                </th>
                <th>
                    Operations
                </th>


                </thead>

                <tbody>

                @if($categories->count() > 0)

                @foreach($categories as $category)
                    <tr>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                           <a href="{{ route('category.edit', ['id' => $category->id ]) }}"><i class="fas fa-edit"></i> </a>
                            <a href="{{ route('category.delete', ['id' => $category->id ]) }}"> <i class="fas fa-trash-alt text-danger"></i></a>
                        </td>

                    </tr>
                @endforeach

                    @else
                    <tr>
                        <th colspan="5" class="text-center"> No Categories added</th>
                    </tr>

                    @endif
                </tbody>

            </table>
        </div>

    </div>




@endsection