php



@extends('admin.layouts.app')



@section('content')
    <h1>View Competition Type</h1>
    <p><strong>ID:</strong> {{ $competition_types->id }}</p>
    <p><strong>Name:</strong> {{ $competition_types->name }}</p>
    <p><strong>Description:</strong> {{ $competition_types->description }}</p>
    <p><strong>Is Active:</strong> {{ $competition_types->is_active ? 'Yes' : 'No' }}</p>
    <a href="{{ route('competition_types.index') }}">Back</a>
@endsection
