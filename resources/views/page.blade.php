@extends('layout')
@section('header')
    <div class="d-flex justify-content-between">
        <h3>Content</h3>
        <a href="/home" class=" btn btn-success">Back to blog</a>
    </div>
@endsection
@section('body')

    {{-- <h5 class="card-title">{{$table[0]->name}}</h5>
    <p class="card-text">{{$table[0]->description}}</p> self try--}}
    <h5 class="card-title">{{$table->name}}</h5>
    <p class="card-text">{{$table->description}}</p>
    {{-- sayar Way is more easy --}}
@endsection
