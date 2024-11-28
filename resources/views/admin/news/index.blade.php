@extends('layouts.app')
@section('title')
    Index
@endsection

@section('content')
    @foreach($news as $new)
        <table>
            <tr>
                <td>#</td>
                <td>Категория</td>
                <td>Заголовок</td>
                <td>описание</td>
                <td>текст</td>
                <td>фото</td>
                <td>Активно</td>
                <td>Тэги</td>
                <td>Дата публикации</td>
                <td>Автор</td>
                <td></td>
            </tr>
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$new->news_category}}</td>
                <td>{{$new->title}}</td>
                <td>{{$new->description}}</td>
                <td>{{$new->text}}</td>
                <td>{{$new->image}}</td>
                <td>{{$new->is_active}}</td>
                <td>{{$new->tags}}</td>
                <td>{{$new->published_date}}</td>
                <td>{{$new->created_by}}</td>
            </tr>
            <tr>


                <td>
                    <form action="{{route('admin.news.edit', $new)}}" method="get">
                        @csrf
                        @method('get')
                        <input class="btn btn-outline-success" type="submit" value="Изменить">
                    </form>
                </td>

                <td>
                    <form action="{{route('admin.news.destroy', $new)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-outline-danger" type="submit" value="Удалить">
                    </form>
                </td>
            </tr>
        </table>
    @endforeach
    {{--    <form action="{{ route('news.create') }}" method="post">--}}
    {{--        <input type="submit" value="Добавить">--}}
    {{--    </form>--}}
    <a href="{{ route('news.create') }}">Добавить</a>
@endsection
