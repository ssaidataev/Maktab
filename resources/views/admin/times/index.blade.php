@extends('admin.layouts.app')



@section('content')
    <h1>Times</h1>

    <a href="{{ route('admin.times.create') }}">Create New</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Half</th>
            <th>Start_time</th>
            <th>End_time</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($times as $time)


            <tr>
                <td>{{ $time->id }}</td>
                <td>{{ $time->half }}</td>
                <td>{{ $time->start_time }}</td>
                <td>{{ $time->end_time }}</td>
                <td>{{ $time->created_at }}</td>
                <td>{{ $time->updated_at }}</td>
                <td>
                    <a href="{{ route('admin.times.show', $time->id) }}">View</a>
                    <a href="{{ route('admin.times.edit', $time->id) }}">Edit</a>
                    <form action="{{ route('admin.times.destroy', $time->id) }}" method="POST"
                          style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
