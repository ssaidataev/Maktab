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
            <a href="{{ route('admin.classes.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Education_date_id</th>
                    <th>Supervisor_id</th>
                    <th>Room_id</th>
                    <th>Номер класса</th>
                    <th>Буква класса</th>
                    <th>Активность</th>
                    <th>Язык класса</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($classes as $classes)
                    <tr>
                        <td>{{ $classes->id }}</td>
                        <td>{{ $classes->id }}</td>
                        <td>{{ $classes->room_id }}</td>
                        <td>{{ $classes->number }}</td>
                        <td>{{ $classes->literal }}</td>
                        <td>{{ $classes->is_active ? 'Да' : 'Нет' }}</td>
                        <td>{{ $classes->class_type }}</td>
                        <td>
                            <a href="{{ route('admin.classes.show', $classes->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.classes.edit', $classes->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.classes.destroy', $classes->id) }}" method="POST" style="display:inline;">
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


