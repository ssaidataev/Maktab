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
            <a href="{{ route('admin.education_levels.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Названия</th>
                    <th>Описания</th>
                    <th>Ордер</th>
                    <th>Активность</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($educationLevels as $educationLevel)
                    <tr>
                        <td>{{ $educationLevel->id }}</td>
                        <td>{{ $educationLevel->name }}</td>
                        <td>{{ $educationLevel->description }}</td>
                        <td>{{ $educationLevel->order }}</td>
                        <td>{{ $educationLevel->is_active ? 'Да' : 'Нет' }}</td>
                        <td>
                            <a href="{{ route('admin.education_levels.show', $educationLevel->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.education_levels.edit', $educationLevel->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.education_levels.destroy', $educationLevel->id) }}" method="POST" style="display:inline;">
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


