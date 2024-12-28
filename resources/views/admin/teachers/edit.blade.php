
@extends('admin.layouts.app')
@section('title')
    Edit Post
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
    <form action="{{route('admin.teachers.store',$teacher)}}" method="post">
        @csrf
        @method('POST')
        <label for="">user_id</label><br>
        <input type="text"  class="form-control border-success" value="{{$teacher->user_id}}" name="user_id" id=""><br>
        <label for="">position_id</label><br>
        <input type="text"  class="form-control border-success" value="{{$teacher->position_id}}" name="position_id" id=""><br>
        <label for="">education_level_id</label><br>
        <input type="text"  class="form-control border-success" value="{{$teacher->education_level_id}}" name="education_level_id" id=""><br>



        <input type="submit" class="btn btn-outline-secondary" value="Save">
    </form>
        </div>
    </div>
@endsection

