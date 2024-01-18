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
                Group Stage schedule
                <br>
                Day 3
            </h3>
            <br>

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
                        <tr>
                            <td>311</td>
                            <td>Male</td>
                            <td>08:00 - 09:00</td>
                            <td>Buona Ventura vs Beacon</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>312</td>
                            <td>Male</td>
                            <td>09:15 - 10:15</td>
                            <td>Pahoa vs Tunas Bangsa</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>313</td>
                            <td>Male</td>
                            <td>10:30 - 11:30</td>
                            <td>Bunda Mulia vs Francis</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>314</td>
                            <td>Male</td>
                            <td>11:45 - 12:45</td>
                            <td>JNY vs Binus</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>325</td>
                            <td>Female</td>
                            <td>13:15 - 14:15</td>
                            <td>SMPN 126 vs Ipeka</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>326</td>
                            <td>Female</td>
                            <td>14:30 - 15:30</td>
                            <td>Atisa vs Santa Ursula</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>327</td>
                            <td>Female</td>
                            <td>15:45 - 16:45</td>
                            <td>Pahoa vs JNY</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>328</td>
                            <td>Female</td>
                            <td>17:00 - 18:00</td>
                            <td>Saint John vs Bunda Mulia</td>
                            <td>MPSH</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
