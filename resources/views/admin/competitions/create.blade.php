@extends('admin.layouts.app')

@section('title')
    Соревонования
@endsection

@section('sub-title')
    Добавить Соревнования
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.competitions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="competition_type">Тип соревнования:</label>
                <select name="competition_type_id" id="competition_type" class="form-control">
                    @foreach($competitionTypes as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Введите название" required>
                </div>
                <div class="form-group">
                    <label for="logo">Логотип</label>
                    <input type="file" name="logo" id="logo" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Введите описание"></textarea>
                </div>
                <div class="form-group">
                    <label for="document">Документ</label>
                    <input type="file" name="document" id="document" class="form-control-file">
                </div>

                <div class="form-group">
                    <label for="is_active">Активность:</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1">
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@stop
