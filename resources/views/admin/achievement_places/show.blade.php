@extends('admin.layouts.app')
@section('title')
    Достижение
@endsection

@section('sub-title')
    Показать
@endsection
@section('content')
    <div class="card" >
        <div class="card-body">
            <p><strong>#:</strong> {{ $achievementPlace->id }}</p>
            <p><strong>Название:</strong> {{ $achievementPlace->name }}</p>
            <p><strong>Описания:</strong> {{ $achievementPlace->description }}</p>
            <p><strong>Активность:</strong> {{ $achievementPlace->is_active ? 'Да' : 'Нет' }}</p>
            <p><strong>Иконка:</strong> {{ $achievementPlace->icon }}</p>
            <a href="{{ route('admin.achievement_places.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
