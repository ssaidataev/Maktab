@extends('admin.layouts.app')

@section('title')
    Ученики
@endsection

@section('sub-title')
    Редактировать Ученика
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Указываем, что это запрос на обновление -->

                <div class="form-group">
                    <label>Имя:</label>
                    <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $student->first_name) }}">
                </div>
                <div class="form-group">
                    <label>Фамилия:</label>
                    <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $student->last_name) }}">
                </div>
                <div class="form-group">
                    <label>Отчество</label>
                    <input type="text" name="middle_name" class="form-control" value="{{ old('middle_name', $student->middle_name) }}">
                </div>

                <div class="form-group">
                    <label>День рождения</label>
                    <input type="date" name="birth_date" class="form-control" value="{{ old('birth_date', $student->birth_date) }}">
                </div>
                <div class="form-group">
                    <label>Пол</label>
                    <select class="form-select" name="gender">
                        <option value="1" {{ old('gender', $student->gender) == 1 ? 'selected' : '' }}>Мужской</option>
                        <option value="0" {{ old('gender', $student->gender) == 0 ? 'selected' : '' }}>Женский</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Адрес</label>
                    <input type="text" name="address" class="form-control" value="{{ old('address', $student->address) }}">
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input type="tel" name="phone" class="form-control" value="{{ old('phone', $student->phone) }}">
                </div>
                <div class="form-group">
                    <label>Электронная почта</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $student->email) }}">
                </div>
                <div class="form-group">
                    <label>Класс</label>
                    <select class="form-select" name="class_id">
                        @foreach($classes as $class)
                            <option value="{{ $class->id }}" {{ old('class_id', $student->class_id) == $class->id ? 'selected' : '' }}>
                                {{ $class->number . $class->literal }} ({{ $class->class_type }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Статус ученика</label>
                    <select class="form-select" name="student_status_id">
                        @foreach($statuses as $status)
                            <option value="{{ $status->id }}" {{ old('student_status_id', $student->student_status_id) == $status->id ? 'selected' : '' }}>
                                {{ $status->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Имя пользователя</label>
                    <input type="text" name="username" class="form-control" value="{{ old('username', $student->username) }}">
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <div style="position: relative;">
                        <input type="password" name="password" class="form-control" id="password">
                        <button type="button" onclick="togglePassword()" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); border: none; background: none; cursor: pointer;">
                            👁️
                        </button>
                    </div>
                </div>

                <script>
                    function togglePassword() {
                        const passwordField = document.getElementById('password');
                        const toggleButton = event.target;

                        if (passwordField.type === 'password') {
                            passwordField.type = 'text';
                            toggleButton.textContent = '🙈';
                        } else {
                            passwordField.type = 'password';
                            toggleButton.textContent = '👁️';
                        }
                    }
                </script>

                <br>

                <button type="submit" class="btn btn-primary">Сохранить изменения</button>
            </form>
        </div>
    </div>
@stop
