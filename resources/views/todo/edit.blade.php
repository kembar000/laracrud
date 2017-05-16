@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('todo.update') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$todos->id }}">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" id="" placeholder="" name="name" value="{{$todos->name}}">
        </div>
        <div class="form-group">
          <label for="">List ID</label>
          <select class="form-control" name="list_id">
            <option value="">Pilih daftar</option>
            @foreach($lists as $list)
              @if($list->id === $todos->list_id)
                <option value="{{$list->id}}" selected="true">{{$list->name}}</option>
              @else
                <option value="{{$list->id}}">{{$list->name}}</option>
              @endif
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
