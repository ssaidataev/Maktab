@extends('admin.layouts.app')
@section('title')
    Достижение
@endsection

@section('sub-title')
    Показать
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>#:</strong> {{ $achievementLevel->id }}</p>
            <p><strong>Название:</strong> {{ $achievementLevel->name }}</p>
            <p><strong>Описания:</strong> {{ $achievementLevel->description }}</p>
            <p><strong>Активность:</strong> {{ $achievementLevel->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.achievement_levels.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
