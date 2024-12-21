@extends('admin.layouts.app')
@section('title')
    Статус студентов
@endsection

@section('sub-title')
    Список статусов
@endsection



@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.student-statuses.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Названия</th>
                    <th>Описания</th>
                    <th>Активность</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($statuses as $status)
                    <tr>
                        <td>{{ $status->id }}</td>
                        <td>{{ $status->name }}</td>
                        <td>{{ $status->description }}</td>
                        <td>{{ $status->is_active ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('admin.student-statuses.show', $status->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.student-statuses.edit', $status->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.student-statuses.destroy', $status->id) }}" method="POST" style="display:inline;">
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


