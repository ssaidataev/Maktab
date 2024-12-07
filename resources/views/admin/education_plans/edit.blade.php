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
            <form action="{{ route('admin.education_plans.update', $educationPlan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Название:</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $educationPlan->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Описание:</label>
                    <textarea id="description" name="description" class="form-control" required>{{ $educationPlan->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="is_active">Активность:</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ $educationPlan->is_active ? 'checked' : '' }}>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
