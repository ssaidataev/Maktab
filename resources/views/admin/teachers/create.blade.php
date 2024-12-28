@extends('admin.layouts.app')

@section('title')
    Добавить данные
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.teachers.store') }}" method="post">
                @csrf
                <label for="first_name"><b>Имя</b></label><br>
                <input type="text" class="form-control border-success" name="first_name" id="first_name"><br>

                <label for="last_name"><b>Фамилия</b></label><br>
                <input type="text" class="form-control border-success" name="last_name" id="last_name"><br>

                <label for="middle_name"><b>Отчество</b></label><br>
                <input type="text" class="form-control border-success" name="middle_name" id="middle_name"><br>

                <label for="username"><b>Имя пользователья</b></label><br>
                <input type="text" class="form-control border-success" name="username" id="username"><br>

                <label for="email"><b>Электронная почта</b></label><br>
                <input type="email" class="form-control border-success" name="email" id="email"><br>

                <label for="password"><b>Пароль</b></label><br>
                <input type="password" class="form-control border-success" name="password" id="password"><br>

                <label for="gender">Пол</label>
                <select name="gender" class="form-control">
                    <option value="man">Mужской</option>
                    <option value="woman">Женский</option>
                </select><br><br>

                <label for="phone"><b>Телефон</b></label><br>
                <input type="text" class="form-control border-success" name="phone" id="phone"><br>

                <label for="birthday"><b>День рождения</b></label><br>
                <input type="date" class="form-control border-success" name="birthday" id="birthday"><br>

                <label for="address"><b>Адрес</b></label><br>
                <input type="text" class="form-control border-success" name="address" id="address"><br>

                <label for="position">Должность</label>
                <select class="form-select" name="position_id">
                    @foreach($positions as $position)
                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                    @endforeach
                </select><br><br>

                <label for="education_level">Уровень образования</label>
                <select class="form-select" name="education_level_id">
                    @foreach($education_levels as $e)
                        <option value="{{ $e->id }}">{{ $e->name }}</option>
                    @endforeach
                </select><br><br>

                <input type="submit" class="btn btn-outline-info" value="Save">
            </form>
        </div>
    </div>
@endsection
