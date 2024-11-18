@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Детали галереи</h1>
        <div class="mb-3">
            <strong>Категория:</strong> {{ $gallery->gallery_category_id }}
        </div>
        <div class="mb-3">
            <strong>Название:</strong> {{ $gallery->title }}
        </div>
        <div class="mb-3">
            <strong>Описание:</strong> {{ $gallery->description }}
        </div>
        <div class="mb-3">
            <strong>Изображение:</strong><br>
            @if ($gallery->image)
                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Изображение" width="200">
            @else
                Нет изображения
            @endif
        </div>
        <a href="{{ route('galleries.index') }}" class="btn btn-primary">Назад</a>
    </div>
@endsection
