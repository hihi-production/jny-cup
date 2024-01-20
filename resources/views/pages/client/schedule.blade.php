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
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="py-5" style="color: #E0F46E">
            <h1 class="text-capitalize">schedule</h1>
            <h3>
                The JNY Cup 2024 event will commence from January 19th until January 26th (1 week long).
            </h3>
            <br>

            <ul class="nav justify-content-center mb-3">
                <li class="nav-item">
                    <a class="nav-link" style="color: #E0F46E" aria-current="page" href="{{ route('schedule') }}">Schedule Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #E0F46E" href="{{ route('basketball') }}">Basketball Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #E0F46E" href="{{ route('fencing') }}">Fencing Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #E0F46E" href="{{ route('swimming') }}">Swimming Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #E0F46E" href="{{ route('mural') }}">Mural Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #E0F46E" href="{{ route('dance') }}">Dance Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #E0F46E" href="{{ route('band') }}">Band Schedule</a>
                </li>
            </ul>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Events</th>
                        <th scope="col">Details</th>
                        <th scope="col">Time</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>Friday, 19 January 2024</td>
                        <td>Opening Ceremony</td>
                        <td>Opening of the 6th JNY Cup</td>
                        <td>15:00 - 16:30</td>
                    </tr>

                    <tr>
                        <td rowspan="2">Saturday, 20 January 2024</td>
                        <td>Swimming Competition</td>
                        <td>All categories</td>
                        <td>08:00 - 12:00</td>
                    </tr>

                    <tr>
                        <td>Basketball Competition</td>
                        <td>Round Robin / Group Stage</td>
                        <td>08:00 - 18:00</td>
                    </tr>

                    <tr>
                        <td>Sunday, 21 January 2024</td>
                        <td>Fencing Competition</td>
                        <td>Elimination Rounds and Final Round</td>
                        <td>08:00 - finish</td>
                    </tr>

                    <tr>
                        <td rowspan="2">Monday, 22 January 2024</td>
                        <td>Basketball Competition</td>
                        <td>Round Robin / Group Stage</td>
                        <td>08:00 - 18:00</td>
                    </tr>

                    <tr>
                        <td>Mural Competition</td>
                        <td></td>
                        <td>08:00 - 15:00</td>
                    </tr>

                    <tr>
                        <td>Tuesday, 23 January 2024</td>
                        <td>Basketball Competition</td>
                        <td>Round Robin / Group Stage</td>
                        <td>08:00 - 18:00</td>
                    </tr>

                    <tr>
                        <td rowspan="2">Wednesday, 24 January 2024</td>
                        <td>Basketball Competition</td>
                        <td>Semi Final Round</td>
                        <td>08:30 - 14:15</td>
                    </tr>

                    <tr>
                        <td>Dance Competition</td>
                        <td></td>
                        <td>14:30 - 17:20</td>
                    </tr>

                    <tr>
                        <td>Thursday, 25 January 2024</td>
                        <td>Basketball Competition</td>
                        <td>Final Round</td>
                        <td>15:00 - 18:00</td>
                    </tr>

                    <tr>
                        <td rowspan="2">Friday, 26 January 2024</td>
                        <td>Battle of the Bands</td>
                        <td></td>
                        <td>07:30 - 14:35</td>
                    </tr>

                    <tr>
                        <td>Closing Ceremony</td>
                        <td>Closing of the 6th JNY Cup & Awarding ceremony</td>
                        <td>15:00 - 16:30</td>
                    </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
