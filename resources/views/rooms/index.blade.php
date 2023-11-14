@extends('layouts.app')
@section('content')
        <div class="row">
 
            <div class="col-md-12">
                <div class="card-centered">
                    <div class="card-header">
                        <h2>Комнаты</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/room/create') }}" class="btn btn-success btn-sm" title="Add New Room">
                            <i class="fa fa-plus" aria-hidden="true"></i> Добавить команту
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Название</th>
                                        <th>Статус</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($rooms as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->status }}</td>
 
                                        <td>
                                            <a href="{{ url('/room/' . $item->id) }}" title="View Room"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Посмотреть</button></a>
                                            <a href="{{ url('/room/' . $item->id . '/edit') }}" title="Edit Room"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Изменить</button></a>
 
                                            <form method="POST" action="{{ url('/room' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Room" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('brons.index') }}" class="btn btn-primary">Назад</a>
                        </div>
 
                    </div>
                </div>
            </div>
@endsection