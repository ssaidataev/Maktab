@extends('admin.layouts.app')



@section('content')
    <h1>View Mark Type</h1>
    <p><strong>ID:</strong> {{ $time->id }}</p>
    <p><strong>half</strong> {{ $time->half }}</p>
    <p><strong>start_time</strong> {{ $time->start_time }}</p>
    <p><strong>end_time</strong> {{ $time->end_time }}</p>
    <p><strong>created_at</strong> {{ $time->created_at }}</p>
    <p><strong>updated_at</strong> {{ $time->updated_at }}</p>
    <a href="{{ route('admin.times.index') }}">Back</a>
@endsection

