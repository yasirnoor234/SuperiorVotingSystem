@extends('teacher.seminar.master')
@section('content')
    <div class="container">
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif

        <form method="post" action="{{action('Admin\VotersController@update', $id)}}">
            <div class="form-group row">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Name" name="name" value="{{$voter->name}}">
                </div>

                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Designation</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Designation" name="designation" value="{{$voter->designation}}">
                </div>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Department</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Department" name="department" value="{{$voter->department}}">
                </div>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Class</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Class" name="class" value="{{$voter->class}}">
                </div>
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Section</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Section" name="section" value="{{$voter->section}}">
                </div>

            </div>


            <div class="form-group row">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection