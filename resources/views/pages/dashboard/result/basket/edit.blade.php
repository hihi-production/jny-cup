@extends('layouts.dashboard.base')

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Champion</h3>
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

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple Column</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ route('basket.champion.update', $result->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="competition_name">Competition Name</label>
                                            <input type="text" id="competition_name" class="form-control" placeholder="example: Basket" name="competition_name" value="basketball" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="team">Team Name</label>
                                            <input type="text" id="team" class="form-control @error('team') is-invalid @enderror" placeholder="example: Basket" name="team" value="{{ $result->team }}">
                                            @error('team')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="place">Placement</label>
                                            <select class="form-select" id="place" name="place">
                                                <option value="1" @if($result->place == '1') selected @endif>1</option>
                                                <option value="2" @if($result->place == '2') selected @endif>2</option>
                                                <option value="3" @if($result->place == '3') selected @endif>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select class="form-select" id="category" name="category">
                                                <option value="male" @if($result->category == 'male') selected @endif>Male</option>
                                                <option value="female" @if($result->category == 'female') selected @endif>Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                        <a href="{{ route('basket.champion.index') }}" class="btn btn-light-secondary me-1 mb-1">Back</a>
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
