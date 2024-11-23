@extends('admin.layouts.app')



@section('content')
    <h1>Create Mark Type</h1>
    <form action="{{ route('admin.times.store') }}" method="POST">
        @csrf
        <div>
            <label>half:</label>
            <input class="form-control" type="text" name="half" required>
        </div>
        <div>
            <label>Start time</label>
            <input type="text" class="form-control" name="start_time" required>
        </div>
        <div>
            <label>End time</label>
            <input type="text" name="end_time" class="form-control">
        </div>
        <div>
            <label>Created at</label>
            <input type="date" name="created_at" class="form-control">
        </div>
        <div>
            <label>Updated at</label>
            <input type="date" name="updated_at" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
@endsection
