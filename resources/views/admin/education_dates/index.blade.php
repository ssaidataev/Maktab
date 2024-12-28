@extends('admin.layouts.app')
@section('title')
    Education_dates
@endsection

@section('sub-title')
    Список оценок
@endsection



@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.education_dates.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Начало года</th>
                    <th>Окончание года</th>
                    <th>Активность</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($educationDates as $educationDate)
                    <tr>
                        <td>{{ $educationDate->id }}</td>
                        <td>{{ $educationDate->start_year }}</td>
                        <td>{{ $educationDate->end_year }}</td>
                        <td>{{ $educationDate->is_active ? 'Да' : 'Нет' }}</td>
                        <td>
                            <a href="{{ route('admin.education_dates.show', $educationDate->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.education_dates.edit', $educationDate->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.education_dates.destroy', $educationDate->id) }}" method="POST" style="display:inline;">
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


