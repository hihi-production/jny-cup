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
                Semifinal Round Schedule
                <br>
                Day 4
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
                            <td>411</td>
                            <td>Male</td>
                            <td>08:00 - 09:45</td>
                            <td>Rank 1 (A) vs Rank 2 (B)</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>412</td>
                            <td>Male</td>
                            <td>10:00 - 11:15</td>
                            <td>Rank 2 (A) vs Rank 1 (B)</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>423</td>
                            <td>Female</td>
                            <td>11:30 - 12:45</td>
                            <td>Rank 1 (A) vs Rank 2 (B)</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>424</td>
                            <td>Female</td>
                            <td>13:00 - 14:15</td>
                            <td>Rank 2 (A) vs Rank 1 (B)</td>
                            <td>MPSH</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
