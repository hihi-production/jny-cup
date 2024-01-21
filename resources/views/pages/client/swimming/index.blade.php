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
                    &nbsp; swimming schedule
                </a>
            </h1>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Event</th>
                            <th scope="col">Time</th>
                            <th scope="col">Location</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Warmup</td>
                            <td>07:00 - 07:45</td>
                            <td>JNY's Swimming Pool</td>
                        </tr>
                        <tr>
                            <td>All swimming categories</td>
                            <td>08:00 - 12:00</td>
                            <td>JNY's Swimming Pool</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div style="color: #E0F46E">
            <h3>
                Details of Competitions by Age Group
            </h3>
            <br>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Age Group</th>
                            <th scope="col">Competition</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>9-10 yo by 1 January 2024 <br>
                                (born in 2013-2014)
                            </td>
                            <td>
                                50 metre Freestyle, 100 metre Freestyle, <br>
                                50 metre Breaststroke, 100 metre Breaststroke, <br>
                                50 metre Butterfly, 100 metre Butterfly, <br>
                                50 metre Backstroke, 100 metre Backstroke
                            </td>
                        </tr>
                        <tr>
                            <td>
                                11-12 yo <br>
                                by 1 January 2024 <br>
                                (born in 2011 - 2012)

                                <br><br>

                                13-14 yo<br>
                                by 1 January 2024<br>
                                (born in 2009 - 2010)

                                <br><br>

                                15-16 yo<br>
                                by 1 January 2024<br>
                                (born in 2007 - 2008)

                                <br><br>

                                17-18 yo by 1 January 2024<br>
                                (born in 2005 - 2006)
                            </td>
                            <td>
                                50 metre Freestyle, 100 metre Freestyle, <br>
                                50 metre Breaststroke, 100 metre Breaststroke,<br>
                                50 metre Butterfly, 100 metre Butterfly,<br>
                                50 metre Backstroke, 100 metre Backstroke,<br>
                                200 metre relay (4 participants/team)
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
