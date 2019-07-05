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
            <h3>Menulis dengan Mimpi</h3>
                
            <hr>
        </div>

        <div class="col-md-8">
            @foreach ($blog as $item)
                
            <div class="row mb-4 bordered">
                <div class="col-sm">
                    Oleh : <u>{{ $item->user->name }}</u> | at {{$item->created_at}}
                    <h4>
                        <a href="{{ route('blog.show', $item->id) }}">{{ $item->title}}</a>
                    </h4>
                    <p>
                        {{ str_limit($item->descriptions, 100) }}
                    </p>
                </div>
                <div class="col-sm text-center">
                    <img src="{{Storage::url('images/'.$item->image)}}" alt="" class="img-fluid" srcset="">
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
