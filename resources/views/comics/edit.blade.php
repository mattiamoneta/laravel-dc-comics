@extends('layouts.app')

@section('page-title')
    DC Laravel
@endsection

@section('page-content')
    <h1 class="mb-5">Edit Comic</h1>



    <form method="post" action="{{ route('comics.update', $comic->id) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"
                value="{{ $comic->description }}">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumbnail</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>

        <div class="mb-3">
            <label for="sale" class="form-label">Sale Date</label>
            <input type="date" class="form-control" id="sale" name="sale_date" value="{{ $comic->sale }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
