@extends('admin.layouts.app')
@section('title')
    Create Field
@endsection
@section('content')

    <form action="{{route('admin.feedbacks.store')}}" method="post">
        @csrf
        <label for=""><b>full_name</b></label><br>
        <input type="text" class="form-control border-success" name="full_name" id=""><br>
        <label for=""><b>text</b></label><br>
        <input type="text" class="form-control border-success" name="text" id="" ><br>
        <label for=""><b>photo</b></label><br>
        <input type="file" class="form-control border-success" name="photo" id=""><br>

        <label for=""><b>is_active</b></label><br>
        <input type="text" class="form-control border-success" name="is_active" id="">
        <br><br>
        <input type="submit" class="btn btn-outline-info" value="Save">
    </form>
@endsection


