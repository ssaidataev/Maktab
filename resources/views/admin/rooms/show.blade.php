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
            <p><strong>#:</strong> {{ $rooms->id }}</p>
            <p><strong>Название:</strong> {{ $rooms->name }}</p>
            <p><strong>Этаж:</strong> {{ $rooms->flloor }}</p>
            <p><strong>Этаж:</strong> {{ $rooms->name }}</p>
            <p><strong>Описания:</strong> {{ $rooms->description }}</p>
            <p><strong>Активность:</strong> {{ $rooms->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.rooms.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
