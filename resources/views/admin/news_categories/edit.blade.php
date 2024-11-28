php

@extends('admin.layouts.app')
@section('content')
    <h1>Edit Category of news</h1>
    <form action="{{ route('admin.news_categories.update', $news_categories->id) }}" method="POST">
        @csrf
        @method('POST')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $news_categories->name }}" required>
        </div>

        <br>

        <button type="submit">Save</button>
    </form>
@endsection
