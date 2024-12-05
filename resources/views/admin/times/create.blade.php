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
            <form action="{{ route('admin.times.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Смена:</label>
                    <select id="half" name="half" class="form-control" required>
                        <option value="" disabled selected>Выберите смену...</option>
                        <option value="1">1-я Смена</option>
                        <option value="2">2-я Смена</option>
                        <option value="3">3-я Смена</option>
                    </select>
                </div><br>
                <div class="form-group">
                    <label for="description">Начало времени:</label>
                    <input type="time" id="start_time" name="start_time" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="is_active">Окончание времени:</label>
                    <input type="time" class="form-control" id="end_time" name="end_time" >
                </div>
<br>
                <button type="submit" class="btn btn-primary">Добавить</button>

            </form>
        </div>
    </div>
@stop
