@extends('admin.layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.subjects.create') }}" class="btn btn-primary">Создать новый</a>
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
        @foreach ($subjects as $subjects)
            <tr>
                <td>{{ $subjects->id }}</td>
                <td>{{ $subjects->name }}</td>
                <td>{{ $subjects->description }}</td>
                <td>{{ $subjects->is_active ? 'Yes' : 'No' }}</td>
                <td>{{ $subjects->created_at }}</td>
                <td>{{ $subjects->updated_at }}</td>
                <td><a class="btn btn-outline-warning" href="{{route('admin.subjects.edit',$subjects)}}">Изменить</a></td>
                <td>
                    <form action="{{ route('admin.subjects.destroy', $subjects->id) }}" method="POST" style="display: inline;">
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
