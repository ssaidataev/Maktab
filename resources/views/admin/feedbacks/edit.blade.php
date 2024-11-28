
@extends('admin.layouts.app')
@section('title')
    Edit Post
@endsection
@section('content')

    <form action="{{route('admin.feedbacks.store',$feedback)}}" method="post">
        @csrf
        @method('POST')
        <label for="">full_name</label><br>
        <input type="text"  class="form-control border-success" value="{{$feedback->full_name}}" name="full_name" id=""><br>
        <label for="">text</label><br>
        <input type="text"  class="form-control border-success" value="{{$feedback->text}}" name="text" id=""><br>
        <label for="">photo</label><br>
        <input type="file"  class="form-control border-success" value="{{$feedback->photo}}" name="photo" id=""><br>
        <label for="">is_active</label><br>
        <input type="text"  class="form-control border-success" value="{{$feedback->is_active}}" name="is_active" id=""><br><br>



        <input type="submit" class="btn btn-outline-secondary" value="Save">
    </form>
@endsection

