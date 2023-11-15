@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Информация о клиенте</div>
  <div class="card-body">
      
      <form action="{{ url('client/' .$clients->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$clients->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" required id="name" value="{{$clients->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" required id="email" value="{{$clients->email}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" required id="status" value="{{$clients->status}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop