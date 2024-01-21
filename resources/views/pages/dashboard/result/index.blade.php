@extends('layouts.dashboard.base')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Result of Competition</h3>
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
                            <h4 class="card-title">Table with outer spacing</h4>
                            <a href="{{ route('result.create') }}" class="btn btn-primary">Add Champions List</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">Using the most basic table up, here's how
                                    <code>.table</code>-based tables look in Bootstrap. You can use any example
                                    of below table for your table and it can be use with any type of bootstrap tables.
                                </p>
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
                                                <td>{{ $result->competition_name }}</td>
                                                <td class="text-bold-500">{{ $result->team }}</td>
                                                <td>{{ $result->place }}</td>
                                                <td>EDIT</td>
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
