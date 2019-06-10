@extends('teacher.meeting.master')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Meeting Title</th>
                <th>Meeting Purpose</th>
                <th>Date</th>
                <th>Time</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($meetings as $meeting)
                <tr>
                    <td>{{$meeting['id']}}</td>
                    <td>{{$meeting['meeting_title']}}</td>
                    <td>{{$meeting['meeting_purpose']}}</td>
                    <td>{{$meeting['date']}}</td>
                    <td>{{$meeting['time']}}</td>
                    <td><a href="{{action('Teacher\MeetingArrangeController@edit', $meeting['id'])}}" class="btn btn-warning" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                    <td>
                        <form action="{{action('Teacher\MeetingArrangeController@destroy', $meeting['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection