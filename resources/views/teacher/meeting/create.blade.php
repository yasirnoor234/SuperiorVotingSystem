@extends('teacher.meeting.master')
@section('content')
    <div class="container">

        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif

        <form method="post" action="{{url('teacher/meeting')}}">
            <div class="form-group row">
                {{csrf_field()}}
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Meeting Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Meeting Title" name="meeting_title" value="{{ old('meeting_title') }}">
                </div>
                <br><br>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Meeting Purpose</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Meeting Purpose" name="meeting_purpose" value="{{ old('meeting_purpose') }}">
                </div>
                <br><br>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Meeting Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Meeting Date" name="date" value="{{ old('date') }}">
                </div>
                <br><br>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Meeting Time</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Meeting Time" name="time" value="{{ old('time') }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection