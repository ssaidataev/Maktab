php

@extends('admin.layouts.app')
@section('title')
   Добавление позиции
@endsection
@section('sub-title')
    Добавить
@endsection
@section('content')
    <div class="card">
        <div class="card-body">

    <form action="{{ route('admin.positions.store') }}" method="POST">
        @csrf
        <div>
            <label>Имя:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div>
            <label>Описание:</label>
            <textarea name="description"class="form-control" required></textarea>
        </div>
        <div>
            <label>Активность:</label>
            <input type="checkbox"  name="is_active" value="1">
        </div>
        <button class="btn btn-primary" type="submit">Добавить</button>
    </form>
    </div>
    </div>
@endsection
