@extends('layouts.dashboard.base')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Schedule</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Table without outer spacing</h4>
                        <a href="{{ route('schedule.create') }}" class="btn btn-primary">Add Competition</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the most basic table up, here’s how
                                <code>.table</code>-based tables look in Bootstrap. You can use any example
                                of below table for your table and it can be use with any type of bootstrap tables.
                            </p>
                        </div>

                        <!-- Table with no outer spacing -->
                        <div class="table-responsive">
                            <table class="table mb-0 table-lg">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Events</th>
                                        <th>Details</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($schedules as $schedule)
                                    <tr>
                                        <td class="text-bold-500">{{ $schedule->Date }}</td>
                                        <td class="text-bold-500">{{$schedule->Events}}</td>
                                        <td class="text-bold-500">{{$schedule->Details}}</td>
                                        <td class="text-bold-500">{{$schedule->Time}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection