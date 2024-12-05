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
            <p><strong>#:</strong> {{ $educationDate->id }}</p>
            <p><strong>Начало года:</strong> {{ $educationDate->start_year }}</p>
            <p><strong>Окончание года:</strong> {{ $educationDate->end_year }}</p>
            <p><strong>Активность:</strong> {{ $educationDate->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.education_dates.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
