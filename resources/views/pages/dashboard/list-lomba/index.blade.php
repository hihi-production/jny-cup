@extends('layouts.dashboard.base')

@section('content')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>List Lomba</h3>
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

        <section class="section">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Table with outer spacing</h4>
                            <a href="{{ route('lomba.create') }}" class="btn btn-primary">Add Lomba</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">Using the most basic table up, here’s how
                                    <code>.table</code>-based tables look in Bootstrap. You can use any example
                                    of below table for your table and it can be use with any type of bootstrap tables.
                                </p>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>NAME</th>
                                                <th>RATE</th>
                                                <th>SKILL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-bold-500">Michael Right</td>
                                                <td>$15/hr</td>
                                                <td class="text-bold-500">UI/UX</td>

                                            </tr>
                                            <tr>
                                                <td class="text-bold-500">Morgan Vanblum</td>
                                                <td>$13/hr</td>
                                                <td class="text-bold-500">Graphic concepts</td>

                                            </tr>
                                            <tr>
                                                <td class="text-bold-500">Tiffani Blogz</td>
                                                <td>$15/hr</td>
                                                <td class="text-bold-500">Animation</td>

                                            </tr>
                                            <tr>
                                                <td class="text-bold-500">Ashley Boul</td>
                                                <td>$15/hr</td>
                                                <td class="text-bold-500">Animation</td>

                                            </tr>
                                            <tr>
                                                <td class="text-bold-500">Mikkey Mice</td>
                                                <td>$15/hr</td>
                                                <td class="text-bold-500">Animation</td>

                                            </tr>
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
