@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Events list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Event Title</th>
                            </tr>
                            @foreach ($eventdetails as $eventdetail)
                                <tr>
                                    <td>{{ $eventdetail->title }}</td>
                                    <td>{{ $eventdetail->description }}</td>
                                    <td>{{ $eventdetail->type }}</td>
                                    <td>{{ $eventdetail->date }}</td>
                                    <td>{{ $eventdetail->time }}</td>
                                    <td>{{ $eventdetail->event->title }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection