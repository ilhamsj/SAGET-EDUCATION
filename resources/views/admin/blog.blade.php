@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">XP</th>
                        <th scope="col">Capacity</th>
                        <th scope="col">
                            <a href="{{ route('admin.create') }}">Add New</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $item)
                    <tr>
                        <td>
                            <a href="{{ route('course.show', $item->id) }}">{{ $item->title }}</a>
                        </td>
                        <td>{{ $item->xp }}</td>
                        <td>{{ $item->capacity }}</td>
                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('admin.edit', $item->id) }}">Edit</a>
                                    <form action="{{ route('admin.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $courses->links() }}
        </div>
    </div>
</div>
@endsection
