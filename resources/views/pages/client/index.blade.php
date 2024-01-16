@extends('layouts.client.base')

@section('additional-css')
    <style scoped>
        .container {
            max-width: 540px;
        }
        .image-cover {
            background-size: cover;
            object-fit: cover;
        }
        .btn-position {
            bottom: 0;
            left: 0;
        }
    </style>
@endsection

@section('content')
    <div class="container vh-100">
        <div class="w-100 h-100 position-relative">
            <img src="{{ asset('client/assets/img/base.png') }}" class="w-100 h-100 image-cover" alt="">
            <button class="btn btn-success position-absolute btn-position">Start</button>
        </div>
    </div>
@endsection
