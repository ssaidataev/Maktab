php

@extends('admin.layouts.app')
@section('content')
    <h1>Edit News</h1>
    <form action="{{ route('admin.news.update', $news->id) }}" method="POST">
        @csrf
        @method('POST')


        <div>
            <label>Title:</label>
            <input type="text" name="name" value="{{ $news->title }}" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description" required>{{ $news->description }}</textarea>
        </div>
        <div>
            <label>Text:</label>
            <textarea name="description" required>{{ $news->text }}</textarea>
        </div>
        <div>
            <label>Category:</label>
            <select name="news_category_id" id="">
                @foreach($news_categories as $n_category)
                    <option value="{{$n_category->id}}">
                        {{$n_category->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Active:</label>
            <input type="checkbox" name="is_active" value="1" {{ $news->is_active ? 'checked' : '' }}>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
