@extends('admin.layouts.app')
@section('title')
    Тип оценки
@endsection

@section('sub-title')
    Список оценок
@endsection



@section('content')


    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.rooms.create') }}" class="btn btn-primary">Создать новый</a>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Названия</th>
                    <th>Этаж</th>
                    <th>Описание</th>
                    <th>Активность</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($room as $rooms)
                    <tr>
                        <td>{{ $rooms->id }}</td>
                        <td>{{ $rooms->name }}</td>
                        <td>{{ $rooms->flloor }}</td>
                        <td>{{ $rooms->description }}</td>
                        <td>{{ $rooms->is_active ? 'Да' : 'Нет' }}</td>
                        <td>
                            <a href="{{ route('admin.rooms.show', $rooms->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.rooms.edit', $rooms->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.rooms.destroy', $rooms->id) }}" method="POST" style="display:inline;">
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


