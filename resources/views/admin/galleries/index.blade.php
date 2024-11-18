@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Список галерей</h1>
        <a href="{{ route('galleries.create') }}" class="btn btn-primary mb-3">Добавить галерею</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Категория</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Изображение</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($galleries as $gallery)
                <tr>
                    <td>{{ $gallery->id }}</td>
                    <td>{{ $gallery->gallery_category_id }}</td>
                    <td>{{ $gallery->title }}</td>
                    <td>{{ $gallery->description }}</td>
                    <td>
                        @if ($gallery->image)
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="Изображение" width="100">
                        @else
                            Нет изображения
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('galleries.show', $gallery->id) }}" class="btn btn-info btn-sm">Просмотр</a>
                        <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-warning btn-sm">Редактировать</a>
                        <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Вы уверены?')">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
