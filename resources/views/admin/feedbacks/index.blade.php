@extends('admin.layouts.app')

@section('content')
    {{$feedbacks}}
    <table class="table" border="1">
        <tr>
            <th>#</th>
            <th>full_name</th>
            <th>text</th>
            <th>photo</th>
            <th>is_active</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>


        @foreach($feedbacks as $feedback)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$feedback->full_name}}</td>
                <td>{{$feedback->text}}</td>
                <td>{{$feedback->photo}}</td>
                <td>{{$feedback->is_active}}</td>
                <td>{{$feedback->created_at}}</td>
                <td>{{$feedback->updated_at}}</td>
                <td><a class="btn btn-outline-warning" href="{{route('feedbacks.edit',$feedback)}}">Изменить</a></td>
                <td>
                    <form action="{{ route('feedbacks.destroy', $feedback) }}"
                          method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger"  type="submit" value="Delete">
                    </form>

                </td>

            </tr>
        @endforeach
    </table>
@endsection
