@extends('admin.layouts.app')
@section('title')
    Тип оценки
@endsection

@section('sub-title')
    Список оценок
@endsection



@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.mark-types.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Названия</th>
                    <th>Описания</th>
                    <th>Активность</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($markTypes as $markType)
                    <tr>
                        <td>{{ $markType->id }}</td>
                        <td>{{ $markType->name }}</td>
                        <td>{{ $markType->description }}</td>
                        <td>{{ $markType->is_active ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('admin.mark-types.show', $markType->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.mark-types.edit', $markType->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.mark-types.destroy', $markType->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection


