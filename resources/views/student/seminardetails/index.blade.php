@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Seminars list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Seminar Title</th>
                            </tr>
                            @foreach ($seminardetails as $seminardetail)
                                <tr>
                                    <td>{{ $seminardetail->title }}</td>
                                    <td>{{ $seminardetail->description }}</td>
                                    <td>{{ $seminardetail->type }}</td>
                                    <td>{{ $seminardetail->date }}</td>
                                    <td>{{ $seminardetail->time }}</td>
                                    <td>{{ $seminardetail->seminar->title }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection