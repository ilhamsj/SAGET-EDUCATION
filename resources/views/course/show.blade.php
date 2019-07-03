@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row mb-4 bordered">
                <div class="col-sm-12 mb-4">
                    <img src="{{Storage::url('images/'.$item->image)}}" alt="" class="img-fluid" srcset="">
                </div>

                <div class="col-sm">
                    <p>{{ $item->created_at}} XP</p>
                    <span class="badge badge-success">
                        You will get {{ $item->xp}} XP
                    </span>
                    <h3>
                        {{ $item->title}}
                    </h3>

                    <p>
                        {{ $item->descriptions}}
                    </p>
                    <a href="" class="btn btn-primary btn-sm">Daftar Kelas</a>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
