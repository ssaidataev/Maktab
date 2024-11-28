

@extends('admin.layouts.app')



@section('content')
    <h1>View News from {{$news->created_at}}</h1>
    <h3><strong>{{$news->title}}</strong></h3>
    <br>
    <p><strong>Category:</strong> {{ $news_categories->name }}</p>
    <h5>Description: </h5><p>{{$news->description}}</p>
    <br>
    <h5>Text: </h5> <p>{{ $news->text }}</p>
    <br>
    <a href="{{ route('news.index') }}">Back</a>
@endsection
