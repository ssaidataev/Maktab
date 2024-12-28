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
            <p><strong>#:</strong> {{ $classes->id }}</p>
            <p><strong>Номер кабинета:</strong> {{ $classes->room_id }}</p>
            <p><strong>Номер класса:</strong> {{ $classes->number }}</p>
            <p><strong>Буква класса:</strong> {{ $classes->literal }}</p>
            <p><strong>Активность:</strong> {{ $classes->is_active ? 'Да' : 'Нет' }}</p>
            <p><strong>Язык класса:</strong> {{ $classes->class_type }}</p>
            <a href="{{ route('admin.mark-types.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
