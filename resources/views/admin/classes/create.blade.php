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
            <form action="{{ route('admin.classes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Room_id:</label>
                    <input type="number" min="1" id="room_id" name="room_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Номер класса:</label>
                    <input type="number" max="11" min="1" id="number" name="number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Буква класса:</label>
                    <select id="literal" name="literal" class="form-control" required>
                        <option value="" disabled selected>Выберите букву класса...</option>
                        <option value="А">"А"</option>
                        <option value="Б">"Б"</option>
                        <option value="В">"В"</option>
                        <option value="Г">"Г"</option>
                        <option value="Д">"Д"</option>
                        <option value="Е">"Е"</option>
                    </select>
                </div><br>
                <div class="form-group">
                    <label for="is_active">Активность:</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1">
                </div><br>
                <div class="form-group">
                    <label for="name">Язык класса:</label>
                    <select id="class_type" name="class_type" class="form-control" required>
                        <option value="" disabled selected>Выберите язык класса...</option>
                        <option value="tj">Таджикский</option>
                        <option value="ru">Русский</option>
                        <option value="en">Английский</option>
                        <option value="uz">Узбекский</option>
                        <option value="de">Немейкий</option>
                    </select>
                </div><br>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@stop
