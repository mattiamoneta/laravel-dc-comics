@extends('layouts.app')

@section('page-title')
    {{ $comic->title }}
@endsection

@section('page-content')
    <div class="col-9 mx-auto">
        <div class="card">
            <div class="row">
                <div class="col-4">
                    <img src="{{ $comic->thumb }}" class="card-img-top comic-thumb">
                </div>
                <div class="col-7 ms-3">
                    <div class="card-body">
                        <h1 class="card-title mb-5">{{ $comic->title }}</h1>

                        <p class="card-text mb-4">{{ $comic->description }}</p>

                        <div class="card bg-light mb-5">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="box-description me-5">
                                        <h6 class="card-text text-uppercase small">TYPE</h6>
                                        <div class="card-text text-captalize text-muted">{{ $comic->type }}</div>
                                    </div>

                                    <div class="box-description me-5">
                                        <h6 class="card-text text-uppercase small">SERIES</h6>
                                        <div class="card-text text-captalize text-muted">{{ $comic->series }}</div>
                                    </div>

                                    <div class="box-description">
                                        <h6 class="card-text text-uppercase small">PRICE</h6>
                                        <h4 class="card-text text-captalize text-muted">$ {{ $comic->price }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('comics.index') }}" class="btn btn-primary"><i class="fa-solid fa-house me-2"></i>BACK TO DASHBOARD</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
