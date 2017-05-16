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
          <select class="form-control" name="list_id">
            <option value="">Pilih daftar</option>
            @foreach($lists as $list)
              <option value="{{$list->id}}">{{$list->name}}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-default">
          Save
        </button>
      </form>
    </div>
  </div>
@stop
