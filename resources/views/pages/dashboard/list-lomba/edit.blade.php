@extends('layouts.dashboard.base')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Competition</h3>
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
                            <form class="form" action=" {{ route('lomba.update', $competition->id) }} " method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name">Name of Competition</label>
                                            <input type="text" id="name" class="form-control @error('Competition') is-invalid @enderror" placeholder="Competition Name" value="{{ $competition->Competition }}" name="Competition">
                                            @error('Competition')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                    
                                            @error('Status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <select class="form-select" id="Status" name="Status">
                                                <option value="OnGoing" @if($competition->Status == 'OnGoing') selected @endif>OnGoing</option>
                                                <option value="Coming Soon"  @if($competition->Status == 'Coming Soon') selected @endif>Coming Soon</option>
                                                <option value="Finished"  @if($competition->Status == 'Finished') selected @endif>Finished</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="Start_Date">Start Date</label>
                                            <input type="date" id="Start_Date" value="{{$competition->Start_Date}}" class="form-control @error('Start_Date') is-invalid @enderror" placeholder="Start Date" name="Start_Date" required>
                                            @error('Start_Date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="End_Date">End Date</label>
                                            <input type="date" id="End_Date" value="{{$competition->End_Date}}" class="form-control @error('End_Date') is-invalid @enderror"" name="End Date" placeholder="End_Date" required>
                                            @error('End_Date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
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