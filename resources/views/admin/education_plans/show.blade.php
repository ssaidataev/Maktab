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
            <p><strong>#:</strong> {{ $educationPlan->id }}</p>
            <p><strong>Название:</strong> {{ $educationPlan->name }}</p>
            <p><strong>Описания:</strong> {{ $educationPlan->description }}</p>
            <p><strong>Активность:</strong> {{ $educationPlan->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.education_plans.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
