@extends('teacher.seminar.master')
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
                <th>Seminar Title</th>
                <th>Seminar Description</th>
                <th>Seminar Type</th>
                <th>Date</th>
                <th>Time</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($seminars as $seminar)
                <tr>
                    <td>{{$seminar['id']}}</td>
                    <td>{{$seminar['seminar_title']}}</td>
                    <td>{{$seminar['seminar_description']}}</td>
                    <td>{{$seminar['seminar_type']}}</td>
                    <td>{{$seminar['date']}}</td>
                    <td>{{$seminar['time']}}</td>
                    <td><a href="{{action('Teacher\SeminarCreateController@edit', $seminar['id'])}}" class="btn btn-warning" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                    <td>
                        <form action="{{action('Teacher\SeminarCreateController@destroy', $seminar['id'])}}" method="post">
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