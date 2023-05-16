@extends('layouts.app')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')

    <div class="col-10">
        <div class="card">
            <div class="row">
                <div class="col-6">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                  
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{{$comic->description}}</p>
                
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                </div>
            </div>
        </div>
    
    </div>
@endsection
