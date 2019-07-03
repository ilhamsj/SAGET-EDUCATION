@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
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
                            <textarea name="descriptions" id="" class="form-control" cols="30" rows="10" placeholder="descriptions"></textarea>
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
