@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактировать галерею</h1>
        <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="gallery_category_id" class="form-label">Категория</label>
                <input type="number" class="form-control" id="gallery_category_id" name="gallery_category_id" value="{{ $gallery->gallery_category_id }}" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Название</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $gallery->title }}" maxlength="45" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Описание</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $gallery->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Изображение</label>
                @if ($gallery->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="Текущее изображение" width="100">
                    </div>
                @endif
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-success">Обновить</button>
        </form>
    </div>
@endsection
