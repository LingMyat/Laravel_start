@extends('layout')
@section('content')
<div class=" container">
    <div class="card">
        <div class="card-header">
          Blogs
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <tr>
                <th>*</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $row )
            <tr>
                <th>{{$id}}</th>
                <th>{{$row->name}}</th>
                <th>{{ substr($row->description, 0, 100)}}</th>
                <th><a href="">View</a></th>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
</div>
@endsection
