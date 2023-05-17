@extends('layouts.app')


@section('page-title')
    DC Laravel
@endsection

@section('page-content')
    <div class="row">
        <div class="col-5 mb-3">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Add New Item</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale</th>
                <th scope="col">Actions</th>
                <th scope="col"></th>
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
                    <td><a href="{{ route('comics.edit', $item->id) }}" class="btn btn-warning">Edit</a></td>

                    <td>
                        <form action="{{ route('comics.destroy', $item->id) }}" method="post"
                            onSubmit="return confirm('Delete selected comic?');">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" id="btnDelete">DELETE</button>
                        </form>

                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>
@endsection
