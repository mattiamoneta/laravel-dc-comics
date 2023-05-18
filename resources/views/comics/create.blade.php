@extends('layouts.app')

@section('page-title')
    DC Laravel
@endsection

@section('page-content')
    <h1 class="mb-5">Add New Comic</h1>

    <form method="post" action="{{ route('comics.store') }}">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title')
                is-invalid
            @enderror"
                id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }};
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text"
                class="form-control @error('description')
                is-invalid
            @enderror" id="description"
                name="description" value="{{ old('description') }}">
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumbnail</label>
            <input type="text" class="form-control @error('thumb')
                is-invalid
            @enderror"
                id="thumb" name="thumb" value="{{ old('thumb') }}">
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price')
                is-invalid
            @enderror"
                id="price" name="price" value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control @error('series')
                is-invalid
            @enderror"
                id="series" name="series" value="{{ old('series') }}">
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="date" class="form-control @error('sale_date')
                is-invalid
            @enderror"
                id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control @error('type')
                is-invalid
            @enderror"
                id="type" name="type" value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
