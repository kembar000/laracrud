@extends('layouts.app')
@section('content')

  <div class="row">
    <div class="col-md-12">
      <a class="btn btn-info" href="{{ url('/todo/add') }}">
        Tambah Daftar Baru
      </a>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>List ID</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($todos as $todo)
          <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->name}}</td>
            <td>{{$todo->list_id}}</td>
            <td>
              <a href="{{ url('/todo/'.$todo->id.'/edit') }}" class="btn btn-warning">Edit</a>
              <a href="{{ url('/todo/'.$todo->id.'/delete') }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@stop
