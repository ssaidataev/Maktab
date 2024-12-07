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
            <form action="{{ route('admin.education_dates.update', $educationDate->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Начало года:</label>
                    <input type="year" id="start_year" name="start_year" class="form-control" value="{{ $educationDate->start_year }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Окончание года:</label>
                    <input type="year" id="end_year" name="end_year" class="form-control" value="{{ $educationDate->end_year }}" required>
                </div>
                <div class="form-group">
                    <label for="is_active">Активность:</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ $educationDate->is_active ? 'checked' : '' }}>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
