@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Категории галереи</h1>
        <a href="{{ route('gallery_categories.create') }}" class="btn btn-primary mb-3">Добавить категорию</a>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('gallery_categories.edit', $category) }}" class="btn btn-warning btn-sm">Редактировать</a>
                        <form action="{{ route('gallery_categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
