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
            <form action="{{ route('admin.times.update', $time->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Смена:</label>
                    <input type="text" id="half" name="half" class="form-control" value="{{ $time->half }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Начаало времени:</label>
                    <input type="text" id="start_time" name="start_time" class="form-control" value="{{ $time->start_time }}" required>
                </div>
                <div class="form-group">
                    <label for="is_active">Окончание времени:</label>
                    <input type="text" id="end_time" name="end_time" class="form-control"  value="{{ $time->end_time  }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
