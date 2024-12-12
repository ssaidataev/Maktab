
@extends('admin.layouts.app')
@section('content')
    <h1>Edit News Categories</h1>
    <form action="{{ route('admin.news-category.update', $newsCategories->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input class="form-control" type="text" name="name" value="{{ $newsCategories->name }}" required>
        </div>

        <div>
            <label>Is Active:</label>
            <input type="checkbox" name="is_active" value="1" {{ $newsCategories->is_active ? 'checked' : '' }}>
        </div>
        <button class="btn btn-primary btn-sm" type="submit">Save</button>
    </form>
@endsection
