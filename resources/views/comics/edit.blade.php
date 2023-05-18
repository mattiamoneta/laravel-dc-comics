@extends('layouts.app')

@section('page-title')
    DC Laravel
@endsection

@section('page-content')
    <h1 class="mb-5">Edit Comic</h1>


    <div class="card overflow-hidden rounded-4 ">
        <div class="row">
            <div class="col-8">
                <div class="card-body">
                    <form method="post" action="{{ route('comics.update', $comic->id) }}">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ old('title', $comic->title) }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                                name="description" cols="30" rows="5">
                                {{ old('description', $comic->description) }}
                            </textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="thumb" class="form-label">Thumbnail</label>
                            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                                name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                            @error('thumb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" value="{{ old('price', $comic->price) }}">
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                                name="series" value="{{ old('series', $comic->series) }}">
                            @error('series')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Sale Date</label>
                            <input type="date" class="form-control @error('sale_date') is-invalid @enderror"
                                id="sale_date" name="sale_date" value="{{ old('sale', $comic->sale) }}">
                            @error('sale_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                                name="type" value="{{ old('type', $comic->type) }}">
                            @error('type')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary"><i
                                class="fa-solid fa-floppy-disk me-2"></i>SAVE</button>
                    </form>
                </div>

            </div>
            <div class="col-4 p-0 ">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="comic-thumb w-100 h-100">
            </div>
        </div>

    </div>
@endsection
