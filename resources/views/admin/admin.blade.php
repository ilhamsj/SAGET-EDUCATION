@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">XP</th>
                        <th scope="col">Capacity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->xp }}</td>
                        <td>{{ $item->capacity }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $courses->links() }}
        </div>
        <div class="col-sm">
            <div class="card">
                <div class="card-header">Course</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="user_id" class="form-control" placeholder="User Id" value="{{ Auth::user()->id }}">
                        </div>

                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="title">
                        </div>

                        <div class="form-group">
                            <input type="text" name="descriptions" class="form-control" placeholder="descriptions">
                        </div>

                        <div class="form-group">
                            <input type="text" name="xp" class="form-control" placeholder="xp">
                        </div>

                        <div class="form-group">
                            <input type="text" name="capacity" class="form-control" placeholder="capacity">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
