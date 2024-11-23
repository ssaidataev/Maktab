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
            <p><strong>#:</strong> {{ $markType->id }}</p>
            <p><strong>Название:</strong> {{ $markType->name }}</p>
            <p><strong>Описания:</strong> {{ $markType->description }}</p>
            <p><strong>Активность:</strong> {{ $markType->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.mark-types.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
