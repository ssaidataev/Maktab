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
            <p><strong>#:</strong> {{ $time->id }}</p>
            <p><strong>Смена:</strong> {{ $time->half }}</p>
            <p><strong>Начало времени:</strong> {{ $time->start_time }}</p>
            <p><strong>Окончание времени:</strong> {{ $time->end_time }}</p>
            <a href="{{ route('admin.times.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@stop
