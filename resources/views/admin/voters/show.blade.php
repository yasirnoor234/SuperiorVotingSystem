@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Users list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Company</th>
                            </tr>
                            @foreach ($voters as $voter)
                                <tr>
                                    <td>{{ $voter->name }}</td>
                                    <td>{{ $voter->email }}</td>
                                    <td>{{ $voter->company->name }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection