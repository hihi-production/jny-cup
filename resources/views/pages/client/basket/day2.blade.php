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
                Day 2
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
                            <td>221</td>
                            <td>Female</td>
                            <td>08:00 - 09:00</td>
                            <td>SMPN 126 vs Santa Ursula</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>222</td>
                            <td>Female</td>
                            <td>09:15 - 10:15</td>
                            <td>Atisa vs Ipeka</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>223</td>
                            <td>Female</td>
                            <td>10:30 - 11:30</td>
                            <td>Pahoa vs Bunda Mulia</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>224</td>
                            <td>Female</td>
                            <td>11:45 - 12:45</td>
                            <td>Saint John vs JNY</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>215</td>
                            <td>Male</td>
                            <td>13:15 - 14:15</td>
                            <td>Bunda Mulia vs Binus</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>216</td>
                            <td>Male</td>
                            <td>14:30 - 15:30</td>
                            <td>JNY vs Francis</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>217</td>
                            <td>Male</td>
                            <td>15:45 - 16:45</td>
                            <td>Pahoa vs Beacon</td>
                            <td>MPSH</td>
                        </tr>

                        <tr>
                            <td>218</td>
                            <td>Male</td>
                            <td>17:00 - 18:00</td>
                            <td>Buona Ventura vs Tunas Bangsa</td>
                            <td>MPSH</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
