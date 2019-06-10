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
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$meeting->title}}</td>
                    <td>{{$meeting->purpose}}</td>
                    <td>{{$meeting->date}}</td>
                    <td>{{$meeting->time}}</td>

                </tr>
            </tbody>
        </table>
    </div>
@endsection