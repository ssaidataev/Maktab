php
@extends('admin.layouts.app')
@section('content')
    <h1>Edit positions</h1>
    <form action="{{ route('admin.subjects.update', $subjects->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $subjects->name }}" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description" required>{{ $subjects->description }}</textarea>
        </div>
        <div>
            <label>Is Active:</label>
            <input type="checkbox" name="is_active" value="1" {{ $subjects->is_active ? 'checked' : '' }}>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
