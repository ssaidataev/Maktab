@extends('admin.layouts.app')
@section('title')
    Тип компитентции
@endsection

@section('sub-title')
    Список компитентции
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.competition_types.create') }}" class="btn btn-primary">Создать новый</a>
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
                @foreach ($competitionTypes as $competitionType)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $competitionType->name }}</td>
                        <td>{{ $competitionType->description }}</td>
                        <td>{{ $competitionType->is_active ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('admin.competition_types.show', $competitionType->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.competition_types.edit', $competitionType->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.competition_types.destroy', $competitionType->id) }}" method="POST" style="display:inline;">
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


