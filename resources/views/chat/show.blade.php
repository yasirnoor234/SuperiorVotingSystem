@extends('layouts.app')

@section('content')
    <meta name="friendId" content="{{ $friend->id }}">
    <div class="container">
        <div class="column is-8 is-offset-2">
            <div class="panel">
                <div class="panel-handling">
                    {{ $friend->name }}
                    <br>
                    {{ $friend->email }}
                    <br>
                    <div class="contain is-pulled-right">
                        <a href="{{ url('/chat') }}" class="is-link"><i class="fa-fa-arrow-left"></i>Go Back</a>
                    </div>
                    <chat></chat>

                </div>

            </div>

        </div>

    </div>
@endsection