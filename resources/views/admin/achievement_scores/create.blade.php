@extends('admin.layouts.app')

@section('title')

@endsection

@section('sub-title')
    Оценка достижений
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.achievement_scores.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="achievement_level">Уровень достижения:</label>
                    <select name="achievement_level_id" id="achievement_level" class="form-control">
                        @foreach($achievementLevels as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="achievement_place">Место достижения:</label>
                    <select name="achievement_place_id" id="achievement_place" class="form-control">
                        @foreach($achievementPlaces as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="competition"> Соревнования:</label>
                    <select name="competition_id" id="competition" class="form-control">
                        @foreach($competitions as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="score">Бал</label>
                    <input type="number" name="score" id="score" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@stop
