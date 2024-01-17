@extends('layouts.client.base')

@section('additional-css')
    <style scoped>
        .container {
            padding: 0 !important;
        }
        .btn-position {
            left: 25%;
            top: 27%;
        }
        .pushable {
            background: #bcf352;
            border-radius: 12px;
            border: none;
            padding: 0;
            cursor: pointer;
            outline-offset: 4px;
        }
        .front {
            display: block;
            padding: 6px 42px;
            border-radius: 12px;
            font-size: 1.25rem;
            background: #fcfef0;
            color: #4ba74f;
            font-weight: bold;
            transform: translateY(-6px);
        }

        .pushable:active .front {
            transform: translateY(-2px);
        }
        @media (min-width: 414px) {
            .btn-position {
                left: 30%;
                top: 27%;
            }
        }

        @media (min-width: 576px) {
            .container {
                max-width: 670px;
            }
            .btn-position {
                left: 38%;
                top: 27%;
            }
        }
        .image-cover {
            background-size: cover;
            object-fit: fill;
        }
    </style>
@endsection

@section('content')
    <div class="container vh-100">
        <div class="w-100 h-100 position-relative">
            <img src="{{ asset('client/assets/img/base.png') }}" class="w-100 h-100 image-cover" alt="jny-cup">
            <button class="pushable position-absolute btn-position">
                <span class="front">
                  Start Now
                </span>
              </button>
        </div>
    </div>
@endsection
