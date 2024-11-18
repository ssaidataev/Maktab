@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавить категорию</h1>
        <form action="{{ route('gallery_categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Название категории</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
