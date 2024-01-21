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
                    <h3>Basketball Champions</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Basketball</li>
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
                            <a href="{{ route('basket.champion.create') }}" class="btn btn-primary">Add Champions List</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>Competition Name</th>
                                                <th>Team Name / Name</th>
                                                <th>Placement</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($results as $result)
                                            <tr>
                                                <td>{{ $result->competition_name }} - {{ $result->category }}</td>
                                                <td class="text-bold-500">{{ $result->team }}</td>
                                                <td>{{ $result->place }}</td>
                                                <td>
                                                    <a href="{{ route('basket.champion.edit', $result->id) }}" class="btn icon icon left btn-sm btn-warning">
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
