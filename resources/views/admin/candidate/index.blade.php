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
                                    <td><a href="{{ route('candidate.edit',$candidate->id)}}" class="btn btn-primary" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a></td>
                                    <td><a href="{{ route('candidate.show',$candidate->id)}}" class="btn btn-outline-info" onclick="return confirm('Are you sure you want to show this item?');">Show</a></td>
                                    <td>
                                        <form action="{{ route('candidate.destroy', $candidate->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection