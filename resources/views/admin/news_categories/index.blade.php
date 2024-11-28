@extends('layouts.app')
@section('title')
    Index
@endsection

@section('content')
    @foreach($news_categories as $n_category)
        <table>
            <tr>
                <td>#</td>
                <td>Название</td>
                <td>Создано</td>
                <td>Изменено</td>
                <td></td>
            </tr>
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$n_category->name}}</td>
                <td>{{$n_category->created_at}}</td>
                <td>{{$n_category->updated_at}}</td>
            </tr>
            <tr>
                <td>
                    <form action="{{route('admin.news_categories.edit', $n_category)}}" method="get">
                        @csrf
                        @method('get')
                        <input class="btn btn-outline-success" type="submit" value="Изменить">
                    </form>
                </td>

                <td>
                    <form action="{{route('admin.news_categories.destroy', $n_category)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-outline-danger" type="submit" value="Удалить">
                    </form>
                </td>
            </tr>
        </table>
    @endforeach
    <a href="{{ route('news_categories.create') }}">Добавить</a>
@endsection
