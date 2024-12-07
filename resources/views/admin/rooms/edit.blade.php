php
@extends('admin.layouts.app')
@section('content')
    <h1>Edit rooms</h1>
    <form action="{{ route('admin.rooms.update', $rooms->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $rooms->name }}" required>
        </div>
        <div>
            <label>Floor:</label>
            <input type="text" name="floor" value="{{ $rooms->floor }}" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description" required>{{ $rooms->description }}</textarea>
        </div>
        <div>
            <label>Is Active:</label>
            <input type="checkbox" name="is_active" value="1" {{ $rooms->is_active ? 'checked' : '' }}>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
