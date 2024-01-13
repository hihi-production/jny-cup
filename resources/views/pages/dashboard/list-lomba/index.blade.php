@extends('layouts.dashboard.base')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>List of Competitions</h3>
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
                        <a href="{{ route('lomba.create') }}" class="btn btn-primary">Add Competition</a>
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
                                <thead >
                                    <tr>
                                        <th>Competition</th>
                                        <th>Status</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($competitions as $competition)
                                    <tr>
                                        <td class="text-bold-500">{{ $competition->Competition }}</td>
                                        <td class="text-bold-500">{{$competition->Status}}</td>
                                        <td class="text-bold-500">{{$competition->Start_Date}}</td>
                                        <td class="text-bold-500">{{$competition->End_Date}}</td>
                                        <td>
                                            <a href="{{route('lomba.edit', $competition->id)}}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('lomba.delete', $competition->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf 
                                            <button type="submit" onclick="return confirm('Are You Sure You Want to Delete?')" class="btn btn-danger">
                                            Delete
                                            </button>
                                        </form>
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
    </section>
    </div>
@endsection