@extends('admin.layouts.app')
@section('title')
    Create Field
@endsection
@section('content')
    <div class="card">
        <div class="card-body">

    <form action="{{route('admin.feedbacks.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for=""><b>Полное имя</b></label><br>
        <input type="text" class="form-control border-success" name="full_name" id=""><br>
        <div class="form-group">
            <label for="description">Текст</label>
            <textarea id="text" name="text" class="form-control" required></textarea>
        </div>
        <label for=""><b>Фото</b></label><br>
        <input type="file" class="form-control-file" name="photo" id="photo"><br>

        <div class="form-group">
            <label for="is_active">Активность:</label>
            <input type="checkbox" id="is_active" name="is_active" value="1">
        </div>
        <br><br>
        <input type="submit" class="btn btn-outline-info" value="Save">
    </form>
        </div>
    </div>
@endsection


