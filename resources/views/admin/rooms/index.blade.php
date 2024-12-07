@extends('admin.layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.rooms.create') }}" class="btn btn-primary">Создать новый</a>
        </div>

<div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Этаж</th>
            <th>Описание</th>
            <th>Активность</th>
            <th>Дата изменения</th>
            <th>Дата удаления</th>
            <th>Изменить</th>
            <th>Удалить</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($rooms as $rooms)
            <tr>
                <td>{{ $rooms->id }}</td>
                <td>{{ $rooms->name }}</td>
                <td>{{ $rooms->floor }}</td>
                <td>{{ $rooms->description }}</td>
                <td>{{ $rooms->is_active ? 'Yes' : 'No' }}</td>
                <td>{{ $rooms->created_at }}</td>
                <td>{{ $rooms->updated_at }}</td>
                <td><a class="btn btn-outline-warning" href="{{route('admin.rooms.edit',$rooms)}}">Изменить</a></td>
                <td>
                    <form action="{{ route('admin.rooms.destroy', $rooms->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                           <input class="btn btn-danger"  type="submit" value="Удалить">
                        </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
