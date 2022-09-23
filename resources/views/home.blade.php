@extends('layout')
@section('header')
          <div class="d-flex justify-content-between">
            <h3>Blogs</h3>
            <a href="home/create" class=" btn btn-success">+Create</a>
          </div>
 @endsection
 @section('body')
        <div class="card-body">
          <table class="table table-striped ">
            <tr>
                <th>*</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $row )
            <tr>
                <th>{{$id}}</th>
                <th>
                    <a href="/home/{{$row->id}}" class=" text-decoration-none text-black">{{$row->name}}</a>
                </th>
                <th>
                    <a href="/home/{{$row->id}}" class=" text-decoration-none text-black">{{ substr($row->description, 0, 100)}}</a>
                </th>
                <th>
                    <button class="btn btn-link p-0 me-1"><a href="/home/{{$row->id}}/edit" class=" ">Edit</a></button>/
                    <form action="/home/{{$row->id}}" class=" d-inline-block p-0 m-0" method="post">
                        @csrf
                        @method('DELETE')
                        <button class=" btn btn-link text-danger p-0 m-0">Delete</button>
                    </form>
                </th>

            </tr>
            <?php $id++;?>
            @endforeach
          </table>
        </div>
        <div class="card-footer">
            <a href="logout" class=" btn btn-primary float-end me-2">Logout</a>
        </div>
@endsection
