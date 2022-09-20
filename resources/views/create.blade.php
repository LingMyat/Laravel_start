@extends('layout')
@section('header')

          <div class="d-flex justify-content-between">
            <h3>Add Post</h3>
            <a href="/home" class=" btn btn-success">Back to blog</a>
          </div>
@endsection
@section('body')
        <div class="card-body">
            <form action="/home" method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Title</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Description</label>
                  <textarea id="" name="description" class=" form-control" rows="8"></textarea>
                </div>

                <button type="submit" class="btn btn-primary float-end">Create</button>
              </form>

        </div>
@endsection

