@extends('teacher.seminar.master')
@section('content')
    <div class="container">

        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif

        <form method="post" action="{{url('teacher/seminar')}}">
            <div class="form-group row">
                {{csrf_field()}}
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Seminar Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Seminar Title" name="seminar_title" value="{{ old('seminar_title') }}">
                </div>

                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Seminar Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Seminar Description" name="seminar_description" value="{{ old('seminar_description') }}">
                </div>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Seminar Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Seminar Type" name="seminar_type" value="{{ old('seminar_type') }}">
                </div>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Seminar Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Seminar Date" name="date" value="{{ old('date') }}">
                </div>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Seminar Time</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Seminar Time" name="time" value="{{ old('time') }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection