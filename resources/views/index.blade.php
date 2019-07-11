@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center" style="margin-bottom:0">
            <h1 class="">Saget Education</h1>
            <h2 class="">
                "Smart Generation Education
                Kami adalah Bimbingan belajar yang mempunyai tujuan untuk 
                membimbing siswa yang mengalami kesulitan belajar, dengan metode pembelajaran berbasis Techno-Socio.
            </h2>
            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-primary">Masuk</a>
                <a href="{{ route('register') }}" class="btn btn-outline-secondary">Daftar</a>
            @endguest
    </section>
    
    {{-- <div class="bg-danger"> --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-12 py-4  text-center">
                    <div class="row mb-4 justify-content-center">
                        <div class="col-sm">
                            <h3>Kelas</h3>
                            <h4>
                                Metode pembelajaran kami berbasis teknologi sehingga siswa dapat belajar dengan mudah.                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($courses as $item)
                        <div class="col-md-3 mb-4">
                            <div class="card bg-white">
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
            </div>
        </div>
    {{-- </div> --}}

    {{-- <div class="bg-warning"> --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-12 py-4 text-center">
                    <div class="row mb-4 justify-content-center">
                        <div class="col-sm">
                            <h3>Kegiatan</h3>
                            <h4 class="">"Kegiatan Kami dari sabang sampai merauka membawa kontribusi untuk pendidikan diindonesia"</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}

    {{-- <div class="bg-success"> --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-12 py-4 text-center">
                    <div class="row mb-4 justify-content-center">
                        <div class="col-sm">
                            <h3>Blog</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}

    {{-- <div class="bg-primary"> --}}
        <div class="container">
            <div class="row">
                @php
                    $team = ['Arum Putri Sukmasari', 'Irfan Setyawan', 'Wahyu Budi', 'Ilham Saputra Jati'];
                    $posisi = ['CEO', 'COO', 'CMFO', 'CTO'];
                    $quote = [
                        'Lorem ipsum, dolor sit amet consectetur adipisicing elit', 
                        'Delectus nobis odio unde tempore earum omnis error officiis', 
                        'Voluptatibus quos Obcaecati, asperiores dolorem ullam nam ', 
                        'Solve Business Problems with Technology'
                    ];
                    $imageUrl = [
                        'https://instagram.fkno3-1.fna.fbcdn.net/vp/f7af4c1d1965693b04acbc4ea25dc4d4/5DA57395/t51.2885-19/s150x150/29716534_1087338391407287_2540948243391447040_n.jpg?_nc_ht=instagram.fkno3-1.fna.fbcdn.net&_nc_cat=111',
                        'https://instagram.fkno3-1.fna.fbcdn.net/vp/d418e3b9993dfc577ae061647c47ed64/5DBDDCF7/t51.2885-19/s150x150/32377361_164431597557510_8137286884867964928_n.jpg?_nc_ht=instagram.fkno3-1.fna.fbcdn.net&_nc_cat=106',
                        'https://instagram.fkno3-1.fna.fbcdn.net/vp/6a1a4bade53a6e2a3553dbc944efd14f/5DC0F0A0/t51.2885-19/s150x150/17125511_256904888091846_6270298686157225984_a.jpg?_nc_ht=instagram.fkno3-1.fna.fbcdn.net&_nc_cat=106',
                        'https://instagram.fkno3-1.fna.fbcdn.net/vp/13c82e20cc339bf7bd66d5cbb0086d0e/5DC4A988/t51.2885-19/s150x150/64256969_1172943679756681_7273843650570747904_n.jpg?_nc_ht=instagram.fkno3-1.fna.fbcdn.net&_nc_cat=101',
                    ]
                @endphp

                <div class="col-sm-12 py-4 text-center">
                    <h3>Team</h3>

                    <div class="row">
                        @for ($i = 0; $i < count($team); $i++)
                            <div class="col-sm">
                                {{-- <img src="{{Storage::url('images/team1.jpg')}}" class="img-fluid rounded-circle mb-4" alt="" srcset=""> --}}
                            <img src="{{$imageUrl[$i] }}" class="img-fluid rounded-circle mb-4" alt="" srcset="">
                                <h4>
                                    <a href="">{{$team[$i]}}</a>
                                </h4>
                                <p>
                                    {{$quote[$i]}}
                                </p>
                                <h5>{{$posisi[$i]}}</h5>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
@endsection
