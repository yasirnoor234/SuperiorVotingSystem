@extends('teacher.meeting.master')
@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <h1>Showing Meetings {{$meeting->title}}</h1>
            <tr>
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
                    <td>{{$meeting['meeting_title']}}</td>
                    <td>{{$meeting['meeting_purpose']}}</td>
                    <td>{{$meeting['date']}}</td>
                    <td>{{$meeting['time']}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection