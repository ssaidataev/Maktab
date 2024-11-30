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
            <p><strong>#:</strong> {{ $positions->id }}</p>
            <p><strong>Название:</strong> {{ $positions->name }}</p>
            <p><strong>Описания:</strong> {{ $positions->description }}</p>
            <p><strong>Активность:</strong> {{ $positions->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.mark-types.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
