
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
            <form action="{{ route('admin.rooms.update', $rooms->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Название:</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $rooms->name }}" required>
                </div>
                <div class="form-group">
                    <label for="name">Этаж:</label>
                    <select id="flloor" name="flloor" class="form-control" value="{{ $rooms->flloor }}" required>
                        <option value="" disabled selected>Выберите Этаж...</option>
                        <option value="1">1-этаж</option>
                        <option value="2">2-этаж</option>
                        <option value="3">3-этаж</option>
                        <option value="4">4-этаж</option>
                        <option value="5">5-этаж</option>
                    </select>
                </div><br>
                <div class="form-group">
                    <label for="description">Описание:</label>
                    <textarea id="description" name="description" class="form-control" required>{{ $rooms->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="is_active">Is Active:</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ $rooms->is_active ? 'checked' : '' }}>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

@endsection
