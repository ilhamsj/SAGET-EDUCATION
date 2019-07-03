@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h3>Kelas</h3>
            <h4 class="display-4">
                "Daftar kelas dan dapatkan SP"
            </h4>
            <hr>
        </div>

        <div class="col-md-8">
            @foreach ($courses as $item)
            <div class="row mb-4 bordered">
                <div class="col-sm">
                    <img src="{{Storage::url('images/'.$item->image)}}" alt="" class="img-fluid" srcset="">
                </div>

                <div class="col-sm">
                    <h4>
                        <a href="{{ route('course.show', $item->id) }}">{{ $item->title}}</a>
                    </h4>
                    <span class="badge badge-warning">
                        {{ $item->capacity}} Seat Available
                    </span>
                    <span class="badge badge-success">
                        You will get {{ $item->xp}} XP
                    </span>
                    <p>
                        {{ str_limit($item->descriptions, 100) }}
                    </p>
                    <a href="" class="btn btn-primary btn-sm">Daftar Kelas</a>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
