@extends('layouts.app')
@section('content')
 
 
<div class="card">
  <div class="card-header">Просмотр комнаты</div>
      <div class="card-body">
      
    
            <div class="card-body">
            <h5 class="card-title">Название : {{ $rooms->name }}</h5>
            <p class="card-text">Статус : {{ $rooms->status }}</p>
      </div>

  
  </div>
</div>
@endsection