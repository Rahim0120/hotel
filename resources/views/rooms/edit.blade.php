@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Комната</div>
  <div class="card-body">
      
      <form action="{{ url('room/' .$rooms->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden"  name="id" id="id" value="{{$rooms->id}}" id="id" />
        <label>название</label></br>
        <input type="text" name="name"required id="name" value="{{$rooms->name}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" required id="status" value="{{$rooms->status}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop