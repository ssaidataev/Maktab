@extends('admin.layouts.app')
@section('title')
    Тип компитентции
@endsection

@section('sub-title')
    Список компитентции
@endsection



@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.times.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Смена</th>
                    <th>Начало времени</th>
                    <th>Окончание времени</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($times as $time)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $time->half }}</td>
                        <td>{{ $time->start_time }}</td>
                        <td>{{ $time->end_time }}</td>
                        <td>
                            <a href="{{ route('admin.times.show', $time->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.times.edit', $time->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.times.destroy', $time->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
