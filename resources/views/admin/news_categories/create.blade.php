@extends('admin.layouts.app')
@section('content')
    <h1>Create News Categories</h1>
    <form action="{{ route('admin.news-category.store') }}" method="POST">
        @csrf
        <div>
            <label>Name:</label>
            <input class="form-control" type="text" name="name" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <div>
            <label>Is Active:</label>
            <input type="checkbox" name="is_active" value="1">
        </div>
        <button class="btn btn-primary" type="submit"">Save</button>
    </form>
@endsection


