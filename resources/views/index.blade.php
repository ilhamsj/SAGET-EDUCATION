@extends('layouts.app')

@section('content')
<div class="container">
    <section class="jumbotron text-center bg-transparent">
            <h1 class="">Saget Education</h1>
            <h2 class="">
                "Kami adalah Lembaga Bimbingan belajar yang berbasis teknologi Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia molestiae optio omnis architecto quo laudantium debitis"
            </h2>
            @guest
                <a href="" class="btn btn-outline-primary">Masuk</a>
                <a href="" class="btn btn-outline-secondary">Daftar</a>
            @endguest
    </section>
    
    <div class="row">

        <div class="col-sm-12 py-4 text-center">
            <h3>Kelas</h3>
            <div class="row">
                @foreach ($courses as $item)
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{Storage::url('images/'.$item->image)}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4><a href="{{ route('course.show', $item->id) }}">{{ $item->title}}</a></h4>
                            {{ $item->descriptions}}
                            {{ $item->capacity}}
                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-outline-primary">Ikuti Kelas</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="col-sm-12 py-4 text-center">
            <h3>Kegiatan</h3>
        </div>

        <div class="col-sm-12 py-4 text-center">
            <h3>Blog</h3>
        </div>
        <div class="col-sm-12 py-4 text-center">
            <h3>Team</h3>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    
                <div class="col">
                    <img src="{{Storage::url('images/team1.jpg')}}" class="img-fluid rounded-circle" alt="" srcset="">
                    <h4><a href="">Arum Putri Sukmasari</a></h4>
                    <h5>CEO</h5>
                </div>
                @endfor
            </div>
        </div>
    </div>

     
</div>
@endsection
