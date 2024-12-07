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
            <p><strong>Полное имя:</strong> {{ $feedback->full_name }}</p>
            <p><strong>Текст:</strong> {{ $feedback->text }}</p>
            <p><strong>Фото:</strong> {{ $feedback->photo }}</p>
            <p><strong>Активность:</strong> {{ $feedback->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.feedbacks.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
