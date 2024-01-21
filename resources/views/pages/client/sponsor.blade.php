@extends('layouts.client.base')

@section('additional-css')
    <style scoped>
        .table {
            --bs-table-color: #E0F46E;
            --bs-table-bg: transparent !important;
            --bs-table-accent-bg: transparent;
            width: 100%;
            border-color: #E0F46E;
        }

        .nav-link {
            color: #bcf352 !important;
        }

        .nav-link.active {
            background-color: #bcf352 !important;
            color: #333 !important;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="py-5" style="color: #E0F46E">

            <h1 class="text-capitalize pb-5">
                <a href="{{ route('table-of-content') }}" style="color: #E0F46E" class="text-decoration-none">
                    <i class="fa-solid fa-arrow-left-long"></i>
                    &nbsp; Sponsors
                </a>
            </h1>


            <div class="row">
                <div class="col-md-6 col-12 mb-3">
                    <img src="{{ asset('client/assets/img/sponsor1.png') }}" alt="" class="w-100">
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <img src="{{ asset('client/assets/img/sponsor2.png') }}" alt="" class="w-100">
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <img src="{{ asset('client/assets/img/sponsor3.png') }}" alt="" class="w-100">
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <img src="{{ asset('client/assets/img/sponsor4.png') }}" alt="" class="w-100">
                </div>

                <div class="col-12">
                    <img src="{{ asset('client/assets/img/sponsor5.png') }}" alt="" class="w-100">
                </div>
            </div>


        </div>
    </div>
@endsection
