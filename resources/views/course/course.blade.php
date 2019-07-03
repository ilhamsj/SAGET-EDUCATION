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
            <hr>
        </div>

        <div class="col-md-8">
            @foreach ($courses as $item)
            <div class="row mb-4 bordered">
                <div class="col-sm-5">
                    <img src="{{Storage::url('images/0.jpg')}}" alt="" class="img-fluid" srcset="">
                </div>

                <div class="col-sm">
                    <h4>
                        <a href="{{ route('course.show', $item->id) }}">{{ $item->title}}</a>
                    </h4>
                    <span class="badge badge-success">
                        You will get {{ $item->capacity}} XP
                    </span>
                    <p>
                        {{ $item->descriptions}}
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
