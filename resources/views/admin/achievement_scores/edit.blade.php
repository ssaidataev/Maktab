@extends('admin.layouts.app')

@section('title')

@endsection

@section('sub-title')
    Оценка достижений
    {{$achievementScore}}
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.achievement_scores.update', $achievementScore->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="achievement_level">Уровень достижения:</label>
                    <select name="achievement_level_id" id="achievement_level" class="form-control">
                        @foreach($achievementLevels as $type)
                            <option

                                @if($achievementScore->achievement_level_id==$type->id)
                                    selected
                                @endif

                                 value="{{ $type->id }}" >{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="achievement_place">Место достижения:</label>
                    <select name="achievement_place_id" id="achievement_place" class="form-control">
                        @foreach($achievementPlaces as $type)
                            <option

                                @if($achievementScore->achievement_place_id==$type->id)
                                    selected
                                @endif

                                value="{{ $type->id }}" >{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="competition"> Соревнования:</label>
                    <select name="competition_id" id="competition" class="form-control">
                        @foreach($competitions as $type)
                            <option

                                @if($achievementScore->competition_id==$type->id)
                                    selected
                                @endif

                                value="{{ $type->id }}" >{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="score">Бал</label>
                    <input type="number" value="{{$achievementScore->score}}" name="score" id="score" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@stop
