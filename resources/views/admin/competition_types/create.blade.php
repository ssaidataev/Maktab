@extends('admin.layouts.app')
@section('title')
    Тип компитенции
@endsection

@section('sub-title')
    Добавить
@endsection


@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.competition_types.store') }}" method="POST">
                @csrf
                <div class="col-6">
                    <table id="example1" class="table table-bordered table-striped">
                        <tr></tr>
                        <div >
                            <label>Название:</label>
                            <input class="form-control" type="text" name="name" required>
                        </div>
                        <div>
                            <label>Описание:</label>
                            <textarea class="form-control" name="description" required></textarea>
                        </div>
                        <div>
                            <label>Активность:</label>
                            <input  type="checkbox" checked name="is_active" value="1">
                        </div></table>
                    <button class="btn btn-outline-primary" type="submit">Сохранить</button></div>
            </form>
        </div>

    </div>


@endsection
