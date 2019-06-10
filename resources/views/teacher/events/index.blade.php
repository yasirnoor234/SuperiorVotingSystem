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
                    <div class="panel-heading">Events list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th rowspan="2">Events</th>
                                <th colspan="2">Event Details</th>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th colspan="2">Action</th>
                            </tr>
                            @foreach ($events as $event)
                                @foreach ($event->eventdetails as $eventdetail)
                                    <tr>
                                        <td>
                                            @if ($loop->iteration == 1)
                                                <b>{{ $event->title }}: {{ $event->eventdetails->count() }}  Event details(s)</b>
                                            @endif
                                        </td>
                                        <td>{{ $eventdetail->title }}</td>
                                        <td>{{ $eventdetail->description }}</td>
                                        <td>{{ $eventdetail->type }}</td>
                                        <td>{{ $eventdetail->date }}</td>
                                        <td>{{ $eventdetail->time }}</td>
                                        <td><a href="{{action('Teacher\EventCreateController@edit', $eventdetail['id'])}}" class="btn btn-warning" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                                        {{--<td><a href="{{ route('teachers.edit',$event->id)}}" class="btn btn-primary">Edit</a></td>--}}
                                        <td>
                                        <form action="{{action('Teacher\EventsController@destroy', $eventdetail['id'])}}" method="post">
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