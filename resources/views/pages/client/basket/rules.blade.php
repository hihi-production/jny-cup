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
            <h1 class="text-capitalize">basketball</h1>
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
