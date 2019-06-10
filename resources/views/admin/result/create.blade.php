@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Candidate List</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('voter.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <b>Candidate</b>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                                <label for="designation" class="col-md-4 control-label">Designation</label>

                                <div class="col-md-6">
                                    <input id="designation" type="text" class="form-control" name="designation" value="{{ old('designation') }}" required>

                                    @if ($errors->has('designation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                                <label for="department" class="col-md-4 control-label">Department</label>

                                <div class="col-md-6">
                                    <input id="department" type="text" class="form-control" name="department" value="{{ old('department') }}" required>

                                    @if ($errors->has('department'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
                                <label for="class" class="col-md-4 control-label">Class</label>

                                <div class="col-md-6">
                                    <input id="class" type="text" class="form-control" name="class" value="{{ old('class') }}" required>

                                    @if ($errors->has('class'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('class') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('section') ? ' has-error' : '' }}">
                                <label for="section" class="col-md-4 control-label">Section</label>

                                <div class="col-md-6">
                                    <input id="section" type="text" class="form-control" name="section" value="{{ old('section') }}" required>

                                    @if ($errors->has('section'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('section') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cast Vote
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
