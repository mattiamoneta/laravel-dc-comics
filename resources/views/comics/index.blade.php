@extends('layouts.app')


@section('page-title')
    DC Laravel
@endsection

@section('page-content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($comics as $index => $item)
                <tr>
                    <th scope="row">{{ $index }}</th>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['series'] }}</td>
                    <td>{{ $item['sale_date'] }}</td>
                    <td><a href="{{ route('comics.show', $item['id']) }}" class="btn btn-success">Info</a></td>
                </tr>
            @endforeach



        </tbody>
    </table>
@endsection
