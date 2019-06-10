@extends('teacher.event.master')
@section('content')
    <div class="container">

        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif

        <form method="post" action="{{url('teacher/event')}}">
            <div class="form-group row">
                {{csrf_field()}}
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Event Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Event Title" name="event_title" value="{{ old('event_title') }}">
                </div>

                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Event Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Event Description" name="event_description" value="{{ old('event_description') }}">
                </div>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Event Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Event Type" name="event_type" value="{{ old('event_type') }}">
                </div>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Event Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Event Date" name="date" value="{{ old('date') }}">
                </div>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Event Time</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Event Time" name="time" value="{{ old('time') }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection