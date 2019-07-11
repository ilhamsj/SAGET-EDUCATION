@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hi <b>{{ Auth::user()->name }}</b> selamat datang di saget education
                    <hr>
                    Mulai Belajar
                    <h3>
                        <a href="{{ route('course.index') }}">Kelas</a>
                    </h3>

                    <hr>
                    Kegiatan | Coming soon
                    <h3>
                        Saget Road to School
                    </h3>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
