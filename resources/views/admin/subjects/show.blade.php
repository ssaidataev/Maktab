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
            <p><strong>#:</strong> {{ $subjects->id }}</p>
            <p><strong>Название:</strong> {{ $subjects->name }}</p>
            <p><strong>Описания:</strong> {{ $subjects->description }}</p>
            <p><strong>Активность:</strong> {{ $subjects->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.subjects.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
