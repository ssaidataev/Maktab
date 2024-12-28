@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Имя пользователья</th>
            <th>Электронная почта</th>
            <th>Пароль</th>
            <th>Пол</th>
            <th>Телефон</th>
            <th>День рождения</th>
            <th>Адрес</th>
            <th>Должность</th>
            <th>Уровень образования</th>
            <th>Изменить</th>
            <th>Удалить</th>

        </tr>
                </thead>

        @foreach($teachers as $teacher)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$teacher->first_name}}</td>
                <td>{{$teacher->last_name}}</td>
                <td>{{$teacher->middle_name}}</td>
                <td>{{$teacher->username}}</td>
                <td>{{$teacher->email}}</td>
                <td>{{$teacher->password}}</td>
                <td>{{$teacher->gender}}</td>
                <td>{{$teacher->phone}}</td>
                <td>{{$teacher->address}}</td>
                <td>{{$teacher->position_id}}</td>
                <td>{{$teacher->education_level_id}}</td>
                <td>{{$teacher->created_at}}</td>
                <td>{{$teacher->updated_at}}</td>
                <td><a class="btn btn-outline-warning" href="{{route('teachers.edit',$teacher)}}">Изменить</a></td>
                <td>
                    <form action="{{ route('teachers.destroy', $teacher) }}"
                          method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger"  type="submit" value="Delete">
                    </form>

                </td>

            </tr>
        @endforeach
    </table>
        </div>
    </div>
@endsection
