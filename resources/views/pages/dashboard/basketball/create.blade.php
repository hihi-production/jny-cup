@extends('layouts.dashboard.base')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Create Basketball Schedule</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Lomba</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple Column</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ route('basketball.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="team_a">Team A</label>
                                            <input type="text" id="team_a" class="form-control @error('team_a') is-invalid @enderror" placeholder="example: Basket" name="team_a" value="{{ old('team_a') }}">
                                            @error('team_a')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="team_b">Team B</label>
                                            <input type="text" id="team_b" class="form-control @error('team_b') is-invalid @enderror" placeholder="example: Basket" name="team_b" value="{{ old('team_b') }}">
                                            @error('team_b')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="day">Day</label>
                                            <select class="form-select" id="day" name="day">
                                                <option value="day_1">Day 1</option>
                                                <option value="day_2">Day 2</option>
                                                <option value="day_3">Day 3</option>
                                                <option value="day_4">Day 4</option>
                                                <option value="day_5">Day 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="phase">Phase</label>
                                            <select class="form-select" id="phase" name="phase">
                                                <option value="group_stage">Group Stage</option>
                                                <option value="semifinal">Semifinal</option>
                                                <option value="final">Final</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select class="form-select" id="category" name="category">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="start_time">Start Time</label>
                                            <input type="time" id="start_time" class="form-control" name="start_time">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="end_time">End Date</label>
                                            <input type="time" id="end_time" class="form-control" name="end_time">
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
