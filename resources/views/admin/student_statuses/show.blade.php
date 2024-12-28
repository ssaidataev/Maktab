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
            <p><strong>#:</strong> {{ $studentStatus->id }}</p>
            <p><strong>Название:</strong> {{ $studentStatus->name }}</p>
            <p><strong>Описания:</strong> {{ $studentStatus->description }}</p>
            <p><strong>Активность:</strong> {{ $studentStatus->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.mark-types.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
