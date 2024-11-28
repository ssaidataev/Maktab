@extends('admin.layouts.app')

@section('title')
    Тип компитенции
@endsection

@section('sub-title')
    Изменить
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
    <form action="{{ route('admin.competition_types.update', $competitionType->id) }}" method="POST">
        @csrf
        @method('PUT')


        <div>
            <label>Название:</label>
            <input class="form-control" type="text" name="name" value="{{ $competitionType->name }}" required>
        </div>
        <div>
            <label>Описание:</label>
            <textarea class="form-control" name="description" required>{{ $competitionType->description }}</textarea>
        </div>
        <div>
            <label>Активность:</label>
            <input type="checkbox" name="is_active" value="1" {{ $competitionType->is_active ? 'checked' : '' }}>
        </div>
        <button class="btn btn-outline-primary" type="submit">Изменить</button>
    </form>
        </div>
    </div>
@endsection
