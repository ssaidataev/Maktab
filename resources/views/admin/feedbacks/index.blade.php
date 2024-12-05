@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.feedbacks.create') }}" class="btn btn-primary">Создать новый</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Текст</th>
                    <th>Фото</th>
                    <th>Активность</th>
                    <th>Дата создания</th>
                    <th>Дата изменения</th>
                    <th>Изменить</th>
                    <th>Удалить</th>
                </tr>
                </thead>
                <tbody>


        @foreach($feedbacks as $feedback)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$feedback->full_name}}</td>
                <td>{{$feedback->text}}</td>
                <td>
                    @if($feedback->photo)
                        <img src="{{ asset('storage/' . $feedback->photo) }}" alt="Фото" style="width: 50px; height: 50px;">
                    @else
                        Нет фото
                    @endif
                </td>
                <td>{{$feedback->is_active?'Yes' : 'No'}}</td>
                <td>{{$feedback->created_at}}</td>
                <td>{{$feedback->updated_at}}</td>
                <td><a class="btn btn-outline-warning" href="{{route('admin.feedbacks.edit',$feedback)}}">Изменить</a></td>
                <td>

                    <form action="{{ route('admin.feedbacks.destroy', $feedback) }}"
                          method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger"  type="submit" value="Удалить">
                        <a href="{{ route('admin.feedbacks.show', $feedback->id) }}" class="btn btn-info ">Показать</a>

                    </form>

                </td>

            </tr>
        @endforeach
    </table>
@endsection
