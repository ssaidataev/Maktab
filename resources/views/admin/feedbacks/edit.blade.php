
@extends('admin.layouts.app')
@section('title')
    Edit Post
@endsection
@section('content')
    <div class="card">
        <div class="card-body">

    <form action="{{route('admin.feedbacks.store',$feedback)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <label for="">Полное имя</label><br>
        <input type="text"  class="form-control border-success" value="{{$feedback->full_name}}" name="full_name" id=""><br>
        <label for="">Текст</label><br>
        <input type="text"  class="form-control border-success" value="{{$feedback->text}}" name="text" id=""><br>
        <div class="form-group">
            <label for="photo">Фото</label>
            <input type="file" name="photo" id="photo" class="form-control-file">
            @if ($feedback->photo)
                <img src="{{ asset('storage/' . $feedback->logo) }}" alt="Фото" width="100">
            @endif
        </div>
        <div class="form-group">
            <label for="is_active">Активность:</label>
            <input type="checkbox" id="is_active" name="is_active" value="1" {{ $feedback->is_active ? 'checked' : '' }}>
        </div>



        <input type="submit" class="btn btn-outline-secondary" value="Save">
    </form>
        </div>
    </div>
@endsection

