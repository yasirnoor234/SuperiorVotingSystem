@extends('student.layouts.app')
<head>
    <!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


<style type="text/css">
	body{
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #000;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #000;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>

@section('content')
<div class="container">

</div>

<div class="signup-form">

    <form method="POST" action="{{ route('student.register') }}" aria-label="{{ __('Register') }}">
    @csrf
		<h2>Student Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Full Name"  value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
    	</div>
        <div class="form-group">
        	<input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
		<div class="form-group">
            <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" required>
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required> Remeber me</label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="{{route('student.login')}}">Log in</a></div>
</div>
@endsection
