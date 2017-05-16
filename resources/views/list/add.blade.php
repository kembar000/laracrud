@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('list.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="name">
        </div>
        <button type="submit" class="btn btn-default">
          Save
        </button>
      </form>
    </div>
  </div>
@stop
