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
                <a href="{{ route('schedule') }}" style="color: #E0F46E" class="text-decoration-none">
                    <i class="fa-solid fa-arrow-left-long"></i>
                    &nbsp; basketball schedule
                </a>
            </h1>

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#day1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Day 1 - Group Stage</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#day2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Day 2 - Group Stage</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#day3" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Day 3 - Group Stage</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#day4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Day 4 - Semifinal</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#day5" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Day 5 - Final</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="day1" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Match ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Match</th>
                                    <th scope="col">Venue</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($day1->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif
                                @foreach ($day1 as $data1)
                                <tr>
                                    <td>{{ $data1->id }}</td>
                                    <td>{{ $data1->category }}</td>
                                    <td>{{ $data1->start_time }} - {{ $data1->end_time }}</td>
                                    <td>{{ $data1->team_a }} vs {{ $data1->team_b }}</td>
                                    <td>MPSH</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>

                <div class="tab-pane fade" id="day2" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Match ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Match</th>
                                    <th scope="col">Venue</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($day2->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif
                                @foreach ($day2 as $data2)
                                <tr>
                                    <td>{{ $data2->id }}</td>
                                    <td>{{ $data2->category }}</td>
                                    <td>{{ $data2->start_time }} - {{ $data2->end_time }}</td>
                                    <td>{{ $data2->team_a }} vs {{ $data2->team_b }}</td>
                                    <td>MPSH</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="tab-pane fade" id="day3" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Match ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Match</th>
                                    <th scope="col">Venue</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($day3->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif
                                @foreach ($day3 as $data3)
                                <tr>
                                    <td>{{ $data3->id }}</td>
                                    <td>{{ $data3->category }}</td>
                                    <td>{{ $data3->start_time }} - {{ $data3->end_time }}</td>
                                    <td>{{ $data3->team_a }} vs {{ $data3->team_b }}</td>
                                    <td>MPSH</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="day4" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Match ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Match</th>
                                    <th scope="col">Venue</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($semifinals->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif
                                @foreach ($semifinals as $semifinal)
                                <tr>
                                    <td>{{ $semifinal->id }}</td>
                                    <td>{{ $semifinal->category }}</td>
                                    <td>{{ $semifinal->start_time }} - {{ $semifinal->end_time }}</td>
                                    <td>{{ $semifinal->team_a }} vs {{ $semifinal->team_b }}</td>
                                    <td>MPSH</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="day5" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Match ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Match</th>
                                    <th scope="col">Venue</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($finals->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">Data Is Empty</td>
                                    </tr>
                                @endif

                                @foreach ($finals as $final)
                                    <tr>
                                        <td>{{ $final->id }}</td>
                                        <td>{{ $final->category }}</td>
                                        <td>{{ $final->start_time }} - {{ $final->end_time }}</td>
                                        <td>{{ $final->team_a }} vs {{ $final->team_b }}</td>
                                        <td>MPSH</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>

        <div style="color: #E0F46E">
            <h3>
                Rules and Regulations
            </h3>
            <br>

            <ul>
                <li>Each school may send a maximum of ONE team per category.</li>
                <li>The JNY CUP will follow FIBA rules and regulations. Any additional rules will be discussed during the Technical meeting.</li>
                <li>
                    Each team must be accompanied by coach/teacher/supervisor. Each team may consist of a minimum of 7 players and a maximum of 12 players.
                </li>
                <li>
                    All participants must wear their proper matching jerseys, complete with their jersey numbers. Failure to wear a proper jersey will result in prohibition from playing.
                </li>
                <li>
                    All teams must wear the same accessories (arm bands, headbands, arm sleeves, socks, etc) if necessary. Failure to wear the same accessories will result in prohibition from playing.
                </li>
                <li>
                    We will not tolerate late arrivals. Each team must come 30 minutes before the scheduled match.
                </li>
                <li>
                    Round robin system will be applied for group stage (day 1-3) and  elimination system will be applied for semifinal and final round
                </li>
                <li>
                    Group Stage: No running time will be implemented throughout the game, except for the last 2 minutes in the fourth quarter. During free throws, time out, fouls and violations, the game clock will not be stopped.
                </li>
                <li>
                    Elimination and final round: Running time will be implemented throughout the game. During free throws, time out, fouls and violations, the game clock will be stopped.
                </li>
                <li>
                    All decisions are final and cannot be altered.
                </li>
            </ul>
        </div>
    </div>
@endsection
