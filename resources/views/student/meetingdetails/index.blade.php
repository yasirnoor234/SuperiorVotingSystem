@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Meetings list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Purpose</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Seminar Title</th>
                            </tr>
                            @foreach ($meetingdetails as $meetingdetail)
                                <tr>
                                    <td>{{ $meetingdetail->title }}</td>
                                    <td>{{ $meetingdetail->description }}</td>
                                    <td>{{ $meetingdetail->purpose }}</td>
                                    <td>{{ $meetingdetail->date }}</td>
                                    <td>{{ $meetingdetail->time }}</td>
                                    <td>{{ $meetingdetail->meeting->title }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection