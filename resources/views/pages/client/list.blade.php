@extends('layouts.client.base')

@section('additional-css')
    <style scoped>
        .bg {
            background-image: url("{{ asset('client/assets/img/table.png') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: bottom;
        }
        .title {
            font-size: 42px;
            padding-bottom: 14px;
            color: #E0F46E;
        }
        .subtitle {
            font-size: 26px;
            color: #E0F46E;
        }
        .padding-custom {
            padding-top: 20%;
        }

        @media (min-width: 576px) {
            .title {
                font-size: 62px;
                padding-bottom: 14px;
                color: #E0F46E;
            }
            .subtitle {
                font-size: 34px;
                color: #E0F46E;
            }
            .padding-custom {
                padding-top: 8%;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container bg">
        <div class="vh-100 d-flex flex-column text-white align-items-center padding-custom">
            <h1 class="text-uppercase text-center title">jny cup 2024:</h1>
            <h3 class="text-uppercase text-center mb-5 subtitle">table of contents:</h3>
            <div class="text-center" style="list-style-type: none;">
                <li class="display-6 lh-lg"><a class="text-decoration-none" style="color: #E0F46E" href="{{ route('schedule') }}">schedules</a></li>
                <li class="display-6 lh-lg"><a class="text-decoration-none" style="color: #E0F46E" href="{{ route('results') }}">results</a></li>
                <li class="display-6 lh-lg"><a class="text-decoration-none" style="color: #E0F46E" href="{{ route('sponsor') }}">sponsors</a></li>
            </div>
        </div>
    </div>
@endsection
