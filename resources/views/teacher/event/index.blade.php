@extends('teacher.event.master')
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
                <th>Event Title</th>
                <th>Event Description</th>
                <th>Event Type</th>
                <th>Date</th>
                <th>Time</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{$event['id']}}</td>
                    <td>{{$event['event_title']}}</td>
                    <td>{{$event['event_description']}}</td>
                    <td>{{$event['event_type']}}</td>
                    <td>{{$event['date']}}</td>
                    <td>{{$event['time']}}</td>
                    <td><a href="{{action('Teacher\EventCreateController@edit', $event['id'])}}" class="btn btn-warning" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                    {{--<td><a href="{{ route('teachers.edit',$event->id)}}" class="btn btn-primary">Edit</a></td>--}}
                    <td>
                        <form action="{{action('Teacher\EventCreateController@destroy', $event['id'])}}" method="post">
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