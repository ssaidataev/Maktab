@extends('admin.layouts.app')

@section('title')
    Соревнования
@endsection

@section('sub-title')
    Список соревнований
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.competitions.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Тип Соревнования</th>
                    <th>Названия</th>
                    <th>Логотип</th>
                    <th>Описание</th>
                    <th>Документ</th>
                    <th>Активность</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($competitions as $competition)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $competition->competitionType->name }}</td>
                        <td>{{ $competition->name }}</td>
                        <td>
                            @if($competition->logo)
                                <img src="{{ asset('storage/' . $competition->logo) }}" alt="Логотип" style="width: 50px; height: 50px;">
                            @else
                                Нет логотипа
                            @endif
                        </td>
                        <td>{{ $competition->description }}</td>
                        <td>
                            @if($competition->document)
                                <a href="{{ asset('storage/' . $competition->document) }}" target="_blank">Документ</a>
                            @else
                                Нет документа
                            @endif
                        </td>
                        <td>{{ $competition->is_active ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('admin.competitions.show', $competition->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.competitions.edit', $competition->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.competitions.destroy', $competition->id) }}" method="POST" style="display:inline;">
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
