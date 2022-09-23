@extends('layout')
@section('header')

          <div class="d-flex justify-content-between">
            <h3>Edit Post</h3>
            <a href="/home" class=" btn btn-success">Back to blog</a>
          </div>
@endsection
@section('body')
        <div class="card-body">
            <form action="/home/{{$table->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input type="text" name="name" value="{{old('name',$table->name)}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Description</label>
                  <textarea id="" name="description" class=" form-control" rows="8">{{old('description',$table->description)}}</textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <button type="submit" class="btn btn-primary float-end">Save</button>
              </form>

        </div>
@endsection
