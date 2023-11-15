@extends('layouts.app')
@section('content')
 
 
<div class="card-centered">
  <div class="card-header">Клиент</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">ФИО : {{ $clients->name }}</h5>
        <p class="card-text">Email : {{ $clients->email }}</p>
        <p class="card-text">Status : {{ $clients->status }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection