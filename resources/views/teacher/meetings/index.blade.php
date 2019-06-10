@extends('layouts.app')

@section('content')

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Meetings list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th rowspan="2">Meetings</th>
                                <th colspan="2">Meeting Details</th>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Purpose</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th colspan="2">Action</th>
                            </tr>
                            @foreach ($meetings as $meeting)
                                @foreach ($meeting->meetingdetails as $meetingdetail)
                                    <tr>
                                        <td>
                                            @if ($loop->iteration == 1)
                                                <b>{{ $meeting->title }}: {{ $meeting->meetingdetails->count() }}  Meeting details(s)</b>
                                            @endif
                                        </td>
                                        <td>{{ $meetingdetail->title }}</td>
                                        <td>{{ $meetingdetail->description }}</td>
                                        <td>{{ $meetingdetail->purpose }}</td>
                                        <td>{{ $meetingdetail->date }}</td>
                                        <td>{{ $meetingdetail->time }}</td>
                                        <td>
                                            <form action="{{action('Teacher\MeetingsController@destroy', $meetingdetail['id'])}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection