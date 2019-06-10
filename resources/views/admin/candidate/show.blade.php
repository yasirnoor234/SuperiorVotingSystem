@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Show Candidate</h3></div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td><strong>Name: </strong>  {{$candidate->name}}</td>
                                <td><strong>Designation: </strong> {{$candidate->designation}}</td>
                                <td><strong>Department: </strong> {{$candidate->department}}</td>
                                <td><strong>Class: </strong> {{$candidate->class}}</td>
                                <td><strong>Section: </strong> {{$candidate->section}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection