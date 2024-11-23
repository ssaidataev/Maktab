php



@extends('admin.layouts.app')



@section('content')
    <h1>Competition Types</h1>
    <a href="{{ route('admin.competition_types.create') }}">Create New</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Is Active</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($competition_types as $competition_types)


            <tr>
                <td>{{ $competition_types->id }}</td>
                <td>{{ $competition_types->name }}</td>
                <td>{{ $competition_types->description }}</td>
                <td>{{ $competition_types->is_active ? 'Yes' : 'No' }}</td>
                <td>
                    <a href="{{ route('admin.competition_types.show', $competition_types->id) }}">View</a>
                    <a href="{{ route('admin.competition_types.edit', $competition_types->id) }}">Edit</a>
                    <form action="{{ route('admin.competition_types.destroy', $competition_types->id) }}" method="POST"
                          style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
