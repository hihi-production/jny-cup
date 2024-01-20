@extends('layouts.client.base')

@section('additional-css')
    <style scoped>
        .bg {
            background-image: url("{{ asset('client/assets/img/table.png') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: bottom;
        }
    </style>
@endsection

@section('content')
    <div class="container bg">
        <div class="vh-100 d-flex flex-column text-white align-items-center py-5">
            <h1 class="text-uppercase text-center">jny cup 2024:</h1>
            <h2 class="text-capitalize text-center">booklet</h2>
            <h3 class="text-uppercase text-center">table of contents:</h3>
            <div class="text-center" style="list-style-type: none">
                <li><a href="{{ route('schedule') }}">schedule</a></li>
                <li><a href="#">rules</a></li>
                <li><a href="#">sponsors</a></li>
            </div>
        </div>
    </div>
@endsection
