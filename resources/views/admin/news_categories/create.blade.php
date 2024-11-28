@extends('admin.layouts.app')

@section('content')
    <h1>Add category for news</h1>
    <form action="{{ route( 'admin.news_categories.store' ) }}" method="POST">
        @csrf
        <div class="col-6">
            <div >
                <label>Name:</label>
                <input class="form-control" type="text" name="name" required>
            </div>
            <br>
            <button class="btn btn-outline-primary" type="submit">Save</button>
        </div>
    </form>
@endsection
