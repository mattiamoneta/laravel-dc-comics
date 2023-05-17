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
                        <form action="{{ route('comics.destroy', $item->id) }}" method="post" id="delForm">
                            @csrf
                            @method('DELETE')

                            <button type="button" class="btn btn-danger" id="btnDelete" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">DELETE</button>
                        </form>

                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">DELETE</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                    <button type="submit" class="btn btn-danger" form="delForm">YES</button>
                </div>
            </div>
        </div>
    </div>
@endsection
