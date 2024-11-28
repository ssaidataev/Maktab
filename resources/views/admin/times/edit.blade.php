@extends('admin.layouts.app')



@section('content')
    <h1>Edit time</h1>
    <form action="{{ route('admin.times.update', $time->id) }}" method="POST">
        @csrf
        @method('PUT')


        <div>
            <label>half</label>
            <input type="text" name="half" value="{{ $time->half }}" required>
        </div>
        <div>
            <label>start time</label>
            <input type="text" name="start_time" required>{{ $time->start_time }}
        </div>
        <div>
            <label>end time</label>
            <input type="text" name="end_time"  {{ $time->end_time }}>
        </div>
        <div>
            <label>created_at</label>
            <input type="date" name="created_at"  {{ $time->created_at }}>
        </div>
        <div>
            <label>updated_at</label>
            <input type="date" name="updated_at"  {{ $time->updated_at }}>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
