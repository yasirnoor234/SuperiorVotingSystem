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
                    <div class="panel-heading">Seminars list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th rowspan="2">Seminars</th>
                                <th colspan="2">Seminar Details</th>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th colspan="2">Action</th>
                            </tr>
                            @foreach ($seminars as $seminar)
                                @foreach ($seminar->seminardetails as $seminardetail)
                                    <tr>
                                        <td>
                                            @if ($loop->iteration == 1)
                                                <b>{{ $seminar->title }}: {{ $seminar->seminardetails->count() }}  Seminar details(s)</b>
                                            @endif
                                        </td>
                                        <td>{{ $seminardetail->title }}</td>
                                        <td>{{ $seminardetail->description }}</td>
                                        <td>{{ $seminardetail->type }}</td>
                                        <td>{{ $seminardetail->date }}</td>
                                        <td>{{ $seminardetail->time }}</td>
                                        <td><a href="{{action('Teacher\SeminarsController@edit', $seminardetail['id'])}}" class="btn btn-warning" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                                        <td>
                                            <form action="{{action('Teacher\SeminarsController@destroy', $seminardetail['id'])}}" method="post">
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