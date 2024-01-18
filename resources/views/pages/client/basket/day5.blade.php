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
                Final Round Schedule
                <br>
                Day 5
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
                            <td>521</td>
                            <td>Female</td>
                            <td>15:00 - 16:30</td>
                            <td>Winner of SF 1 vs Winner of SF 2</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>512</td>
                            <td>Male</td>
                            <td>16:45 - 18:00</td>
                            <td>Winner of SF 1 vs Winner of SF 2</td>
                            <td>MPSH</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
