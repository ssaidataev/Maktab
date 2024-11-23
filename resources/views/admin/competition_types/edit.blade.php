php



@extends('admin.layouts.app')



@section('content')
    <h1>Edit Competition Type</h1>
    <form action="{{ route('admin.competition_types.update', $competition_types->id) }}" method="POST">
        @csrf
        @method('PUT')


        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $competition_types->name }}" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description" required>{{ $competition_types->description }}</textarea>
        </div>
        <div>
            <label>Is Active:</label>
            <input type="checkbox" name="is_active" value="1" {{ $competition_types->is_active ? 'checked' : '' }}>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
