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
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($profiles as $profile)
                <tr>
                    <td>{{$profile['id']}}</td>
                    <td>{{$profile['name']}}</td>
                    <td>{{$profile['email']}}</td>
                    <td><a href="{{action('Teacher\ProfileController@edit', $profile['id'])}}" class="btn btn-warning" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection