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
            <form action="{{ route('admin.rooms.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Название:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Этаж:</label>
                    <select id="flloor" name="flloor" class="form-control" required>
                        <option value="" disabled selected>Выберите Этаж...</option>
                        <option value="1">1-этаж</option>
                        <option value="2">2-этаж</option>
                        <option value="3">3-этаж</option>
                        <option value="4">4-этаж</option>
                        <option value="5">5-этаж</option>
                    </select>
                </div><br>
                    <div class="form-group">
                    <label for="description">Описания:</label>
                    <textarea id="description" name="description" class="form-control" required></textarea>
                </div><br>
                <div class="form-group">
                    <label for="is_active">Активность:</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1">
                </div><br>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@stop
