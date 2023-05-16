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
                <th scope="col">Description</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale</th>
                <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($comics as $index => $item)
                <tr>
                    <th scope="row">{{ $index }}</th>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['description'] }}</td>
                    <td><img src="{{ $item['thumb'] }}" alt=""></td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['series'] }}</td>
                    <td>{{ $item['sale_date'] }}</td>
                    <td>{{ $item['type'] }}</td>
                </tr>
            @endforeach



        </tbody>
    </table>
@endsection
