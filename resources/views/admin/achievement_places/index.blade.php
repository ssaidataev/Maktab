@extends('admin.layouts.app')
@section('title')
    Достижение
@endsection

@section('sub-title')
    Список достижений
@endsection



@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.achievement_places.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Названия</th>
                    <th>Описания</th>
                    <th>Активность</th>
                    <th>Иконка</th>
                    <th>Действия</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($achievementPlaces as $achievementPlace)
                    <tr>
                        <td>{{ $achievementPlace->id }}</td>
                        <td>{{ $achievementPlace->name }}</td>
                        <td>{{ $achievementPlace->description }}</td>
                        <td>{{ $achievementPlace->is_active ? 'Yes' : 'No' }}</td>
                        <td><img width="30px" src="{{ asset('storage/'.$achievementPlace->icon) }}" alt="">
                            </td>
                        <td>
                            <a href="{{ route('admin.achievement_places.show', $achievementPlace->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.achievement_places.edit', $achievementPlace->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.achievement_places.destroy', $achievementPlace->id) }}" method="POST" style="display:inline;">
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


