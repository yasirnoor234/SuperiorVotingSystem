@extends('multiauth::layouts.app') 
@include('multiauth::layouts.head')
@section('content')
	<body>
		<section class="body">

        @include('multiauth::layouts.header')

			@include('multiauth::layouts.leftsidebar')

            @include('multiauth::layouts.rightsidebar')

		</section>

        @include('multiauth::layouts.footer')

	</body>
@endsection