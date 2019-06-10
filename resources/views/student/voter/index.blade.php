@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Candidates list</h3></div>

                    <div class="panel-body">
                        @if(session()->get('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div><br />
                        @endif
                                <table class="table">
                            <tr>
                                <th>Total Candidate</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th colspan="2">Action</th>
                            </tr>
                            @foreach ($candidates as $candidate)
                                <tr>
                                    <td>
                                        @if ($loop->iteration == 1)
                                            <b>{{ $candidate->count() }} candidates(s)</b>
                                        @endif
                                    </td>
                                    <td>{{ $candidate->name }}</td>
                                    <td>{{ $candidate->designation }}</td>
                                    <td>{{ $candidate->department }}</td>
                                    <td>{{ $candidate->class }}</td>
                                    <td>{{ $candidate->section }}</td>
                                    <td><a class="btn btn-primary" href="{{ url('student/voter/cast') }}" onclick="return confirm('Are you sure you want to cast this candidate?');">Cast Vote</a></td>

                                </tr>

                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
