@extends('admin.layouts.app')
@section('title')
    Категория новостей
@endsection

@section('sub-title')
    Список новостей
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.news-category.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Названия</th>
                    <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($newsCategories as $newsCategory)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $newsCategory->name }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('admin.news-category.show', $newsCategory->id) }}">View</a>
                            <a class="btn btn-warning" href="{{ route('admin.news-category.edit',$newsCategory->id) }}">Edit</a>
                            <form action="{{ route('admin.news-category.destroy', $newsCategory->id) }}" method="POST"
                                  style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
