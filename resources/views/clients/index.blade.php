@extends('layouts.app')
@section('content')
    <!-- <div class="container"> -->
        <div class="row">
 
            <div class="col-md-12">
                <div class="card-centered">
                    <div class="card-header">
                        <h2>Клиенты</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/client/create') }}" class="btn btn-success btn-sm" title="Add New Client">
                            <i class="fa fa-plus" aria-hidden="true"></i> добавить
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ФИО</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->status }}</td>
 
                                        <td>
                                            <a href="{{ url('/client/' . $item->id) }}" title="View Client"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> посмотреть</button></a>
                                            <a href="{{ url('/client/' . $item->id . '/edit') }}" title="Edit Client"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> изменить</button></a>
 
                                            <form method="POST" action="{{ url('/client' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Client" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> удалить</button>
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
        </div>
    <!-- </div> -->
@endsection