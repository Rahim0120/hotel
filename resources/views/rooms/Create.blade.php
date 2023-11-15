@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Комнаты</div>
  <div class="card-body">
      
      <form action="{{ url('room') }}" method="post">
        {!! csrf_field() !!}
        <label>Комната</label></br>
        <input type="text" name="name" required id="name" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop