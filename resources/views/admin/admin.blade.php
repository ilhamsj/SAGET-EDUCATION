@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-4">
            <a href="{{ route('blog.create') }}">New Blog</a> |
            <a href="{{ route('admin.create') }}">New Course</a>
        </div>
        <div class="col-sm-6">
            <table class="table table-bordered table-responsive">
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
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
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
        </div>
        {{-- end course --}}

        <div class="col-sm">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">
                            <a href="{{ route('blog.create') }}">Add New</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $item)
                    <tr>
                        <td>
                            <a href="{{ route('blog.show', $item->id) }}">{{ $item->title }}</a>
                        </td>
                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('blog.edit', $item->id) }}">Edit</a>
                                    <form action="{{ route('blog.destroy', $item->id) }}" method="post">
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
        </div>
        <div class="col-sm">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tanggal Pendaftaran</th>
                        <th scope="col">
                            <a href="{{ route('admin.create') }}">Add New</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                    <tr>
                        <td>
                            {{ $item->name }}
                        </td>
                        <td>
                            {{ $item->email }}
                        </td>
                        <td>
                            {{ $item->created_at }}
                        </td>
                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('blog.edit', $item->id) }}">Edit</a>
                                    <form action="{{ route('blog.destroy', $item->id) }}" method="post">
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
        </div>  
    </div>
</div>
@endsection
