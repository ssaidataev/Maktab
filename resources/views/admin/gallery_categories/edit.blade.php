@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактировать категорию</h1>
        <form action="{{ route('gallery_categories.update', $galleryCategory) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Название категории</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $galleryCategory->name }}" required>
            </div>
            <button type="submit" class="btn btn-success">Обновить</button>
        </form>
    </div>
@endsection
