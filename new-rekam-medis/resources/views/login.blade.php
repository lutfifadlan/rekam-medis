<!doctype html>
<html>

<head>
<title>Login</title>
</head>

<body>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	{{ Form::open(array('url' => 'login')) }}
	<h1>Login</h1>

	<p>
		{{ $errors->first('name') }}
		{{ $errors->first('password') }}
	</p>

	<p>
		{{ Form::label('name', 'Username') }}
		{{ Form::text('name', Input::old('name')) }}
	</p>

	<p>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}
	</p>

	<p> {{ Form::submit('Login') }} </p>
	{{ Form::close() }}
</body>
