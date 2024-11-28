@extends('admin.layouts.app')

@section('content')
    <h1>Add news</h1>
    <form action="{{ route( 'admin.news.store' ) }}" method="POST">
        @csrf
        <div class="col-6">
            <div >
                <label>Title:</label>
                <input class="form-control" type="text" name="title" required>
            </div>
            <div>
                <label>Description:</label>
                <textarea class="form-control" name="description" required></textarea>
            </div>
            <div>
                <label>Text:</label>
                <textarea class="form-control" name="text" required></textarea>
            </div>
            <div>
                <label for="category">Choose category</label><br>
                <select name="news_category_id" id="">
                    @foreach($news_categories as $n_category)
                        <option value="{{$n_category->id}}">
                            {{$n_category->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <lable>Status</lable>
                <br>
                <input type="radio" name="is_active" value="1">Active
                <br>
                <input type="radio" name="is_active" value="0">Deactivate
            </div>
            <div>
                <lable>Photo</lable>
                <input type="file" name="image" id="">
            </div>
            <br>
            <button class="btn btn-outline-primary" type="submit">Save</button>
        </div>
    </form>
@endsection
