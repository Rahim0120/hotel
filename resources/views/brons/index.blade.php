<!-- resources/views/bron/index.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- <div class="container"> -->
        <h2 class="text-center">Список бронирований</h2>
        
        <!-- Форма фильтрации -->
        <div class="row">
    <div class="col-md-10">
        <form action="{{ route('brons.index') }}" method="GET" class="mx-3">
            <div class="form-group d-flex ">
                <div class="col-md-2">
                <label for="room_filter" class="mr-2">Фильтр по комнате:</label>
                </div>    

                <div class="col-md-9">
                <select name="room_filter" id="room_filter" class="form-control mr-2">
                    <option value="allRooms">Все комнаты</option>
                    @foreach($rooms as $room)
                        <option value="{{ $room->id }}" {{ $roomFilter == $room->id ? 'selected' : '' }}>
                            {{ $room->name }}
                        </option>
                    @endforeach
                </select>
                </div>

                <button type="submit" class="btn btn-primary">Применить</button>
            </div>
        </form>
    </div>

    <div class="col-md-2">
        <form action="{{ route('brons.create') }}" method="GET" class="ml-md-3">
            <button type="submit" class="btn btn-primary">Добавить бронь</button>
        </form>
    </div>
</div>

@if($allRoomsSelected) 

<table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Статус</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <td>{{ $room->id }}</td>
                <td>{{ $room->name }}</td>
                <td>{{ $room->status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    

@elseif($brons->isEmpty())

<table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Статус</th>
            </tr>
        </thead>
        <tbody>
        @foreach($freeRooms as $freeRoom)
            <tr>
                <td>{{ $freeRoom->id }}</td>
                <td>{{ $freeRoom->name }}</td>
                <td>{{ $freeRoom->status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@else

<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Комната</th>
                    <th>Дата начала</th>
                    <th>Дата окончания</th>
                    <th>Клиент</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brons as $bron)
                    <tr>
                        <td>{{ $bron->id }}</td>
                        <td>{{ $bron->room->name }}</td>
                        <td>{{ $bron->time_of_bron }}</td>
                        <td>{{ $bron->time_of_free }}</td>
                        <td>{{ $bron->client->name }}</td>
                        <td>
                            <a href="{{ route('brons.edit', $bron->id) }}" class="btn btn-info">Изменить</a>

                            <form method="POST" action="{{ route('brons.destroy', $bron->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger" title="Delete Room" onclick="return confirm(&quot;Вы точно хотите удалить брон?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    

@endif
 

        
    <!-- </div> -->
@endsection
