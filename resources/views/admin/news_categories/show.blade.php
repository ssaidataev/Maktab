

@extends('admin.layouts.app')



@section('content')
    <h3>News Category created at:</h3> <p>{{$news_categories->created_at}}</p>
    <h3>Updated_at</h3> <p>{{$news_categories->updated_at}}</p>
    <br>
    <p><strong>Name:</strong> {{ $news_categories->name }}</p>
    <br>
    <br>
    <a href="{{ route('news_categories.index') }}">Back</a>
@endsection
