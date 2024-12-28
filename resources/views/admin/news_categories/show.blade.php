
@extends('admin.layouts.app')
@section('content')
    <h1>View News Categories</h1>
    <p><strong>ID:</strong> {{ $newsCategories->id }}</p>
    <p><strong>Name:</strong> {{ $newsCategories->name }}</p>
    <a href="{{ route('admin.news-category.index') }}">Back</a>
@endsection
