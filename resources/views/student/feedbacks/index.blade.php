@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Feedback List</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Feedback Title</th>
                                <th>Suggesetions</th>
                            </tr>
                            @foreach ($feedbacks as $feedback)
                                <tr>
                                    <td>{{ $feedback->title }}</td>
                                    <td>
                                        @foreach ($feedback->suggestions as $suggestion)
                                            @if ($loop->iteration > 1)
                                                |
                                            @endif
                                            {{ $suggestion->suggestion }}
                                        @endforeach
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
