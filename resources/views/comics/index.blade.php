@extends('layouts.app')


@section('page-title')
    DC Laravel
@endsection

@section('page-content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('comics.create') }}" class="btn btn-sm btn-primary text-uppercase"><i class="fa-solid fa-plus me-2"></i>Add New
                Item</a>
        </div>
        <div class="card-body">
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
                            <td>$ {{ $item['price'] }}</td>
                            <td>{{ $item['series'] }}</td>
                            <td>{{ $item['sale_date'] }}</td>
                            <td><a href="{{ route('comics.show', $item['id']) }}" class="btn btn-sm btn-outline-primary"><i
                                        class="fa-solid fa-circle-info me-2"></i>DETAILS</a>
                                <a href="{{ route('comics.edit', $item->id) }}" class="btn btn-sm btn-outline-primary"><i
                                        class="fa-solid fa-pen-to-square"></i></a>


                                <button type="button" class="btn btn-sm btn-danger" id="btnDelete" data-bs-toggle="modal"
                                    data-bs-target="#modal{{ $item->id }}"><i
                                        class="fa-solid fa-trash-can"></i></button>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>



    @foreach ($comics as $index => $item)
        <!-- Modal -->
        <div class="modal fade" id="modal{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

                        <form action="{{ route('comics.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">YES</button>
                        </form>
                    </div>
                </div>
            </div>n
        </div>
    @endforeach
@endsection
