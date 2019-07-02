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
                <div class="col">
                    <h4>Arum Putri Sukmasari</h4>
                    <h5>CEO</h5>
                </div>
                <div class="col">CEO</div>
                <div class="col">CEO</div>
                <div class="col">CEO</div>
            </div>
        </div>
    </div>

     
</div>
@endsection
