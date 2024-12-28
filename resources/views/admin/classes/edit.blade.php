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
            <form action="{{ route('admin.mark-types.update', $classes->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Номер кабинета:</label>
                    <input type="number" id="room_id" name="room_id" class="form-control" value="{{ $classes->room_id }}" required>
                </div>
                <div class="form-group">
                    <label for="name">Номер класса:</label>
                    <input type="number" id="number" name="number" class="form-control" value="{{ $classes->number }}" required>
                </div>
                <div class="form-group">
                    <label for="name">Буква класса:</label>
                    <select id="literal" name="literal" class="form-control" value="{{$classes->literal}}" required>
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
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ $classes->is_active ? 'checked' : '' }}>
                </div><br>
                <div class="form-group">
                    <label for="name">Язык класса:</label>
                    <select id="class_type" name="class_type" class="form-control" value="{{ $classes->class_type }}" required>
                        <option value="" disabled selected>Выберите язык класса...</option>
                        <option value="tj">Таджикский</option>
                        <option value="ru">Русский</option>
                        <option value="en">Английский</option>
                        <option value="uz">Узбекский</option>
                        <option value="de">Немейкий</option>
                    </select>
                </div><br>
                <button type="submit" class="btn btn-primary">Изменить</button>
            </form>
        </div>
    </div>
@endsection
