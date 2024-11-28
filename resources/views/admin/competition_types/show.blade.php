@extends('admin.layouts.app')
@section('title')
    Тип оценки
@endsection

@section('sub-title')
    Показать
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>#:</strong> {{ $competitionType->id }}</p>
            <p><strong>Название:</strong> {{ $competitionType->name }}</p>
            <p><strong>Описания:</strong> {{ $competitionType->description }}</p>
            <p><strong>Активность:</strong> {{ $competitionType->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.competition_types.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
