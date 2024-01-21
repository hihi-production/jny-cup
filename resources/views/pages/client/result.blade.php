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
                    &nbsp; Champions Result
                </a>
            </h1>

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#basket" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Basketball</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#fencing" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Fencing</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#swimming" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Swimming</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#mural" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Mural</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#dance" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Dance</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#band" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Band</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="basket" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                    <div class="table-responsive mb-5">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Category</th>
                                    <th scope="col">Placement</th>
                                    <th scope="col">Team Name</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($basketMales->isEmpty())
                                    <tr>
                                        <td colspan="3" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif
                                @foreach ($basketMales as $male)
                                <tr>
                                    <td>{{ $male->category }}</td>
                                    <td>{{ $male->place }}</td>
                                    <td>{{ $male->team }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Category</th>
                                    <th scope="col">Placement</th>
                                    <th scope="col">Team Name</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($basketFemales->isEmpty())
                                    <tr>
                                        <td colspan="3" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif
                                @foreach ($basketFemales as $female)
                                <tr>
                                    <td>{{ $female->category }}</td>
                                    <td>{{ $female->place }}</td>
                                    <td>{{ $female->team }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="tab-pane fade" id="fencing" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Placement</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($fencings->isEmpty())
                                    <tr>
                                        <td colspan="2" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif
                                @foreach ($fencings as $fencing)
                                <tr>
                                    <td>{{ $fencing->place }}</td>
                                    <td>{{ $fencing->team }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="tab-pane fade" id="swimming" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Placement</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($swimmings->isEmpty())
                                    <tr>
                                        <td colspan="2" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif
                                @foreach ($swimmings as $swimming)
                                <tr>
                                    <td>{{ $swimming->place }}</td>
                                    <td>{{ $swimming->team }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="mural" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Placement</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($murals->isEmpty())
                                    <tr>
                                        <td colspan="2" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif
                                @foreach ($murals as $mural)
                                <tr>
                                    <td>{{ $mural->place }}</td>
                                    <td>{{ $mural->team }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="dance" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Placement</th>
                                    <th scope="col">Team Name</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($dances->isEmpty())
                                    <tr>
                                        <td colspan="2" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif
                                @foreach ($dances as $dance)
                                <tr>
                                    <td>{{ $dance->place }}</td>
                                    <td>{{ $dance->team }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="band" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Placement</th>
                                    <th scope="col">Team Name</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($bands->isEmpty())
                                    <tr>
                                        <td colspan="2" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif
                                @foreach ($bands as $band)
                                <tr>
                                    <td>{{ $band->place }}</td>
                                    <td>{{ $band->team }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
