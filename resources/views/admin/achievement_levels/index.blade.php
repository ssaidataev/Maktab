@extends('admin.layouts.app')
@section('title')
    Достижение
@endsection

@section('sub-title')
    Список оценок
@endsection



@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.achievement_levels.create') }}" class="btn btn-primary">Создать новый</a>
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
                @foreach ($achievementLevels as $achievementLevel)
                    <tr>
                        <td>{{ $achievementLevel->id }}</td>
                        <td>{{ $achievementLevel->name }}</td>
                        <td>{{ $achievementLevel->description }}</td>
                        <td>{{ $achievementLevel->is_active ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('admin.achievement_levels.show', $achievementLevel->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.achievement_levels.edit', $achievementLevel->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.achievement_levels.destroy', $achievementLevel->id) }}" method="POST" style="display:inline;">
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


