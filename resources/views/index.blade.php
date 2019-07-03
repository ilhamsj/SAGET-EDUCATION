@extends('layouts.app')

@section('content')
<div class="container">
    <section class="jumbotron text-center bg-transparent">
            <h1 class="">Saget Education</h1>
            <h2 class="">
                "Kami adalah Bimbingan belajar yang berbasis teknologi Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia molestiae optio omnis architecto quo laudantium debitis"
            </h2>
            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-primary">Masuk</a>
                <a href="{{ route('register') }}" class="btn btn-outline-secondary">Daftar</a>
            @endguest
    </section>
    
    <div class="row">

        <div class="col-sm-12 py-4 text-center">
            <div class="row mb-4 justify-content-center">
                <div class="col-sm">
                    <h3>Kelas</h3>
                    <h4 class="display-4">"Kami menghadirkan kelas offline dengan kualitas no 1 diindonesia"</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $item)
                <div class="col-sm-3 mb-4">
                    <div class="card">
                        <img src="{{Storage::url('images/'.$item->image)}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h4><a href="{{ route('course.show', $item->id) }}">{{ $item->title}}</a></h4>
                            <p>
                                {{ str_limit($item->descriptions, 50) }}
                            </p>
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
            <div class="row mb-4 justify-content-center">
                <div class="col-sm">
                    <h3>Kegiatan</h3>
                    <h4 class="display-4">"Kegiatan Kami dari sabang sampai merauka membawa kontribusi untuk pendidikan diindonesia"</h4>
                </div>
            </div>
        </div>

        <div class="col-sm-12 py-4 text-center">
            <h3>Blog</h3>
        </div>
        <div class="col-sm-12 py-4 text-center">
            <h3>Team</h3>
            <div class="row">                
                @for ($i = 0; $i < 4; $i++)
                <div class="col p-4">
                    <img src="{{Storage::url('images/team1.jpg')}}" class="img-fluid rounded-circle mb-4" alt="" srcset="">
                    <h4><a href="">Arum Putri Sukmasari</a></h4>
                    <p>
                        "Build for indonesia from indonesia"
                    </p>
                    <h5>CEO</h5>
                </div>
                
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection
