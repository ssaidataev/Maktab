@extends('admin.layouts.app')

@section('title')
    Тип оценки
@endsection

@section('sub-title')
    Добавить
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.education_levels.store') }}" method="POST">
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
                    <label for="description">Ордер:</label>
                    <input type="number" id="order" name="order" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="is_active">Активность:</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1">
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@stop
