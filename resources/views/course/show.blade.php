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
                    <img src="{{Storage::url('images/0.jpg')}}" alt="" class="img-fluid" srcset="">
                </div>

                <div class="col-sm">
                    <h4>
                        <a href="{{ route('course.show', $item->id) }}">{{ $item->title}}</a>
                    </h4>
                    <span class="badge badge-primary">
                            You will get {{ $item->xp}} XP
                    </span>
                    
                    <p>
                        <h5>What you will learn ?</h5>
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
