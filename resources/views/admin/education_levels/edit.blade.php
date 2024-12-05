@extends('admin.layouts.app')
@section('title')
    Тип оценки
@endsection

@section('sub-title')
    Изменить
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.education_levels.update', $educationLevel->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Название:</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $educationLevel->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Описание:</label>
                    <textarea id="description" name="description" class="form-control" required>{{ $educationLevel->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">Ордер :</label>
                    <input type="number" id="order" name="order" class="form-control" value="{{ $educationLevel->order }}" required>
                </div>
                <div class="form-group">
                    <label for="is_active">Активность:</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ $educationLevel->is_active ? 'checked' : '' }}>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
