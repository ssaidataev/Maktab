@extends('admin.layouts.app')

@section('title')
    Соревнование
@endsection

@section('sub-title')
    Показать
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>#:</strong> {{ $competition->id }}</p>
            <p><strong>Тип Соревнования:</strong> {{ $competition->competitionType->name }}</p>
            <p><strong>Название:</strong> {{ $competition->name }}</p>
            <p><strong>Логотип:</strong>
                @if ($competition->logo)
                    <img src="{{ asset('storage/' . $competition->logo) }}" alt="Логотип" width="100">
                @else
                    Нет логотипа
                @endif
            </p>
            <p><strong>Описание:</strong> {{ $competition->description }}</p>
            <p><strong>Документ:</strong>
                @if ($competition->document)
                    <a href="{{ asset('storage/' . $competition->document) }}">Скачать документ</a>
                @else
                    Нет документа
                @endif
            </p>
            <p><strong>Активность:</strong> {{ $competition->is_active ? 'Да' : 'Нет' }}</p>
            <a href="{{ route('admin.competitions.index') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@endsection
