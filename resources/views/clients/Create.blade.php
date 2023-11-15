@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Страница добавления клиента</div>
  <div class="card-body">
      
      <form action="{{ url('client') }}" method="post">
        {!! csrf_field() !!}
        <label>ФИО</label></br>
        <input type="text" required name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text"required name="email" id="email" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" required name="status" id="status" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop