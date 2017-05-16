@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <a class="btn btn-info" href="{{ url('/list/add') }}">
        Tambah Daftar Baru
      </a>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($lists as $list)
          <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->name}}</td>
            <td>
              <a href="{{ url('/list/'.$list->id.'/edit') }}" class="btn btn-warning">Edit</a>
              <a href="{{ url('/list/'.$list->id.'/delete') }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@stop
