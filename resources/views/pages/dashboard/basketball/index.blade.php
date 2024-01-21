@extends('layouts.dashboard.base')

@section('content')

    <div class="page-heading">
        @if (session('message'))
            <div class="alert alert-{{ session('status') }} alert-dismissible show fade">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Basketball Schedule</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List Lomba</li>
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
                            <h4 class="card-title"></h4>
                            <a href="{{ route('basketball.create') }}" class="btn btn-primary">Add Basketball Schedule</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>Day</th>
                                                <th>Team A</th>
                                                <th>Score Team A</th>
                                                <th>Team B</th>
                                                <th>Score Team B</th>
                                                <th>Category</th>
                                                <th>Phase</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Venue</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($schedules as $schedule)
                                            <tr>
                                                <td>{{ $schedule->day }}</td>
                                                <td class="text-bold-500">{{ $schedule->team_a }}</td>
                                                <td class="text-bold-500">{{ $schedule->score_a }}</td>
                                                <td>{{ $schedule->team_b }}</td>
                                                <td>{{ $schedule->score_b }}</td>
                                                <td class="text-bold-500">{{ $schedule->category }}</td>
                                                <td class="text-bold-500">{{ $schedule->phase }}</td>
                                                <td class="text-bold-500">{{ $schedule->start_time }}</td>
                                                <td>{{ $schedule->end_time }}</td>
                                                <td class="text-bold-500">{{ $schedule->venue }}</td>
                                                <td>
                                                    <a href="{{ route('basketball.edit', $schedule->id) }}" class="btn icon icon left btn-sm btn-warning">
                                                        <i class="fa-solid fa-edit"></i>
                                                        edit
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
