php



@extends('admin.layouts.app')



@section('content')
    <h1>Create Competition Type</h1>
    <form action="{{ route('admin.competition_types.store') }}" method="POST">
        @csrf
        <div class="col-6">
        <div >
            <label>Name:</label>
            <input class="form-control" type="text" name="name" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <div>
            <label>Is Active:</label>
            <input  type="checkbox" name="is_active" value="1">
        </div>
        <button class="btn btn-outline-primary" type="submit">Save</button></div>
    </form>
@endsection
