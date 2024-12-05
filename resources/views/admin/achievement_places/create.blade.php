@extends('admin.layouts.app')

@section('title')
    Достижение
@endsection

@section('sub-title')
    Добавить
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.achievement_places.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Название:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Описания:</label>
                    <textarea id="description" name="description" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="is_active">Активность:</label>
                    <input type="checkbox" checked id="is_active" name="is_active" value="1">
                </div>
                <div class="form-group">
                    <label for="icon">Активность:</label>
                    <input type="file" checked id="icon" name="icon" value="1">
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@stop
