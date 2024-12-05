@extends('admin.layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.positions.create') }}" class="btn btn-primary">Создать новый</a>
        </div>

<div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Описание</th>
            <th>Активность</th>
           <th>Дата создания</th>
            <th>Дата изменения</th>
            <th>Изменить</th>
            <th>Удалить</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($positions as $position)
            <tr>
                <td>{{ $position->id }}</td>
                <td>{{ $position->name }}</td>
                <td>{{ $position->description }}</td>
                <td>{{ $position->is_active ? 'Yes' : 'No' }}</td>
                <td>{{ $position->created_at }}</td>
                <td>{{ $position->updated_at }}</td>
                <td><a class="btn btn-outline-warning" href="{{route('admin.positions.edit',$position)}}">Изменить</a></td>
                <td>
                    <form action="{{ route('admin.positions.destroy', $position->id) }}" method="POST" style="display: inline;">
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
