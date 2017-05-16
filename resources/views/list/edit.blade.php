@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('list.update') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $list->id }}">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="name" value="{{$list->name}}">
        </div>
        <button type="submit" class="btn btn-default">
          Save
        </button>
      </form>
    </div>
  </div>
@stop
