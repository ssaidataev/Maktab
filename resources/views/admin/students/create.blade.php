@extends('admin.layouts.app')

@section('title')
    Ученики
@endsection

@section('sub-title')
    Добавить Ученика
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Имя:</label>
                    <input type="text" name="first_name" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label>Фамилия:</label>
                    <input type="text" name="last_name" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label>Отчество</label>
                    <input type="text" name="middle_name" class="form-control" id="">
                </div>

                <div class="form-group">
                    <label>День рождения</label>
                    <input type="date" name="birth_date" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label>Пол</label>
                    <select class="form-select" name="gender">
                        <option value="1" >Мужской</option>
                        <option value="0">Женский</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Адрес</label>
                    <input type="text" name="address" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input type="tel" name="phone" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label>Электронная почта</label>
                    <input type="email" name="email" class="form-control" id="">
                </div>
                <div class="form-group">Класс</div>
                    <select class="form-select" name="class_id">
                        @foreach($classes as $class)
                            <option value="{{$class->id}}"> {{$class->number.$class->literal}}({{$class->class_type}})</option>
                        @endforeach
                    </select>

                <div class="form-group">Статус ученика</div>
                    <select class="form-select" name="student_status_id">
                        @foreach($statuses as $status)
                            <option value="{{$status->id}}"> {{$status->name}}</option>
                        @endforeach
                    </select>



                <div class="form-group">
                    <label>Имя пользователя</label>
                    <input type="text" name="username" class="form-control" id="">
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
                        const toggleButton = event.target; // Получаем кнопку, вызвавшую событие

                        if (passwordField.type === 'password') {
                            passwordField.type = 'text'; // Показываем пароль
                            toggleButton.textContent = '🙈'; // Меняем иконку
                        } else {
                            passwordField.type = 'password'; // Скрываем пароль
                            toggleButton.textContent = '👁️'; // Возвращаем иконку
                        }
                    }
                </script>

                <br>




                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@stop
