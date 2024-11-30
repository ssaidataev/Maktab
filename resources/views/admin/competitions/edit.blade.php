@extends('admin.layouts.app')

@section('title')
    Соревнования
@endsection

@section('sub-title')
    Редактировать Соревнования
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.competitions.update', $competition->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="competition_type">Тип соревнования:</label>
                    <select name="competition_type_id" id="competition_type" class="form-control">
                        @foreach($competitionTypes as $type)
                            <option value="{{ $type->id }}" {{ $type->id == $competition->competition_type_id ? 'selected' : '' }}>{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Название</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $competition->name }}" required>
                </div>
                <div class="form-group">
                    <label for="logo">Логотип</label>
                    <input type="file" name="logo" id="logo" class="form-control-file">
                    @if ($competition->logo)
                        <img src="{{ asset('storage/' . $competition->logo) }}" alt="Логотип" width="100">
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea name="description" id="description" class="form-control" rows="4">{{ $competition->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="document">Документ</label>
                    <input type="file" name="document" id="document" class="form-control-file">
                    @if ($competition->document)
                        <a href="{{ asset('storage/' . $competition->document) }}">Скачать текущий документ</a>
                    @endif
                </div>
                <div class="form-group">
                    <label for="is_active">Активность:</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ $competition->is_active ? 'checked' : '' }}>
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
