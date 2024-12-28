@extends('admin.layouts.app')

@section('title')
    Достижения
@endsection

@section('sub-title')
    Список достижений
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.achievement_scores.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Уровень достижения</th>
                    <th>Место достижения</th>
                    <th>Соревнование</th>
                    <th>Бал</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach ($achievementScores as $achievementScore)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $achievementScore->achievementLevel->name }}</td>
                        <td>{{ $achievementScore->achievementPlace->name }}</td>
                        <td>{{ $achievementScore->competition->name }}</td>
                        <td>{{ $achievementScore->score }}</td>
                        <td>
                            <a href="{{ route('admin.achievement_scores.show', $achievementScore->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.achievement_scores.edit', $achievementScore->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.achievement_scores.destroy', $achievementScore->id) }}" method="POST" style="display:inline;">
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
