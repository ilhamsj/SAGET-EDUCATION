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
                        <h4 class="display-4">
                                {{ $item->title}}
                            </h4>
                            <hr>
                </div>

                <div class="col-sm">
                    <p>
                        {{ $item->descriptions}}
                    </p>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
