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
            <form action="{{ route('admin.education_dates.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Начало года:</label>
                    <input type="number" id="start_year" min="2024" max="2050" name="start_year" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Окончание года:</label>
                    <input type="number" id="end_year" min="2024" max="2036" name="end_year" class="form-control" required>
                </div>
                <div class="form-group"><br>
                    <label for="is_active">Активность:</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1">
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@stop
