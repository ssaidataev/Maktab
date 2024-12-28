@extends('admin.layouts.app')
@section('title')
    Education_plans
@endsection

@section('sub-title')
    Список оценок
@endsection



@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.education_plans.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Названия</th>
                    <th>Описания</th>
                    <th>Активность</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($educationPlans as $educationPlan)
                    <tr>
                        <td>{{ $educationPlan->id }}</td>
                        <td>{{ $educationPlan->name }}</td>
                        <td>{{ $educationPlan->description }}</td>
                        <td>{{ $educationPlan->is_active ? 'Да' : 'Нет' }}</td>
                        <td>
                            <a href="{{ route('admin.education_plans.show', $educationPlan->id) }}" class="btn btn-info btn-sm">Показать</a>
                            <a href="{{ route('admin.education_plans.edit', $educationPlan->id) }}" class="btn btn-warning btn-sm">Изменить</a>
                            <form action="{{ route('admin.education_plans.destroy', $educationPlan->id) }}" method="POST" style="display:inline;">
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


