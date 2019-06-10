@extends('multiauth::layouts.app') 
<head>
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('stylesheets/theme-custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>
		
    <!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

		
<style type="text/css">
	body {
		color: #fff;
		background: #ecedf0;
	}
	.form-control {
        min-height: 41px;
		background: #fff;
		box-shadow: none !important;
		border-color: #e3e3e3;
	}
	.form-control:focus {
		border-color: #70c5c0;
	}
    .form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 450px;
		margin: 0 auto;
		padding: 100px 0 30px;		
	}
	.login-form form {
		color: #7a7a7a;
		border-radius: 2px;
    	margin-bottom: 15px;
        font-size: 13px;
        background: #ffffff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;	
        position: relative;	
    }
	.login-form h2 {
		font-size: 22px;
        margin: 35px 0 25px;
    }
	.login-form .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -50px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #0088cc;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.login-form .avatar img {
		width: 100%;
	}	
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #0088cc;
		border: none;
		margin-bottom: 20px;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #0099e6;
        outline: none !important;
	}    
	.login-form a {
		color: #337ab7;
		text-decoration: underline;
	}
	.login-form a:hover {
		text-decoration: none;
	}
	.login-form form a {
		color: #7a7a7a;
		text-decoration: none;
	}
	.login-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
@section('content')
<div class="container">
    <div class="row justify-content-center">
    </div>
</div>
<div class="login-form">
	<form  method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
					
    @csrf
					
	<div class="avatar">
			<img src="{{ asset('images/avatar.png')}}" alt="Avatar">
		</div>
        <h2 class="text-center">Admin Login</h2>   
        <div class="form-group">
        	<input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required >
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span> 
            @endif									
		</div>
		<div class="form-group">
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required="required">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span> 
            @endif
        </div>        
		<div class="clearfix">
            <label class="pull-left checkbox-inline">
            <input type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }} required="required"> Remember me</label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Log in</button>
        </div>
		<div class="clearfix">
            <label class="pull-left checkbox-inline">
            <a href="{{ route('admin.password.request') }}" class="pull-right">Forgot Password?</a>
        </div>
    </form>
</div>
@endsection
