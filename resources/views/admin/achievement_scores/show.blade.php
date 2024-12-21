@extends('admin.layouts.app')

@section('title')
    Место достижения
@endsection

@section('sub-title')
    Показать
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>#:</strong> {{ $achievementScore->id }}</p>
            <p><strong>Тип Соревнования:</strong> {{ $achievementScore->achievementLevel->name }}</p>
            <p><strong>Тип Соревнования:</strong> {{ $achievementScore->achievementPlace->name }}</p>
            <p><strong>Тип Соревнования:</strong> {{ $achievementScore->competition->name }}</p>
            <p><strong>Балы:</strong> {{ $achievementScore->score}}</p>
            <a href="{{ route('admin.achievement_scores.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@endsection
