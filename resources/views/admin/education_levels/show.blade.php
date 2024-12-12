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
            <p><strong>#:</strong> {{ $educationLevel->id }}</p>
            <p><strong>Название:</strong> {{ $educationLevel->name }}</p>
            <p><strong>Описания:</strong> {{ $educationLevel->description }}</p>
            <p><strong>Ордер:</strong> {{ $educationLevel->order }}</p>
            <p><strong>Активность:</strong> {{ $educationLevel->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.education_plans.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
