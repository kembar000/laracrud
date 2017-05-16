@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('todo.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="name">
        </div>
        <div class="form-group">
          <label for="">List ID</label>
          <input type="text" class="form-control" id="" placeholder="" name="list_id">
        </div>
        <button type="submit" class="btn btn-default">
          Save
        </button>
      </form>
    </div>
  </div>
@stop
