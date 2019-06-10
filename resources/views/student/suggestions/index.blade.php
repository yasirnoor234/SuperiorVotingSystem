@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Suggestions list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Feedback Title</th>
                                <th>Suggestions</th>
                            </tr>
                            @foreach ($suggestions as $suggestion)
                                <tr>
                                    <td>
                                        @foreach ($suggestion->feedbacks as $feedback)
                                            @if ($loop->iteration > 1)
                                                <br />
                                            @endif
                                            {{ $feedback->title }}
                                        @endforeach
                                    </td>
                                    <td>{{ $suggestion->suggestion }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
