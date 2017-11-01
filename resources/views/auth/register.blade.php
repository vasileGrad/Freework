@extends('main')

@section('title', '| Register')

@section('content')
	<h1 class="center-title">Sign Up</h1>
	<div class="row">
		<div class="col-md-6 col-md-offset-3 form-spacing-top">
			{!! Form::open() !!}

				{{ Form::label('first_name', "First Name:") }}
				{{ Form::text('first_name', null, ['class' => 'form-control']) }}

				{{ Form::label('last_name', "Last Name:") }}
				{{ Form::text('last_name', null, ['class' => 'form-control']) }}

				{{ Form::label('email', 'Email:') }}
				{{ Form::email('email', null, ['class' => 'form-control']) }}

				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password', ['class' => 'form-control']) }}

				{{ Form::label('password_confirmation', 'Confirm Password:') }}
				{{ Form::password('password_confirmation', ['class' => 'form-control']) }}

				<div class="col-md-6 col-md-offset-3">
					{{ Form::submit('Register', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}
				</div>
				
			{!! Form::close() !!}
		</div>
	</div>


@endsection