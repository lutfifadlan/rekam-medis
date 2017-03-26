<!doctype html>
<html>

<head>
<title>Add Patient</title>
</head>

<body>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	{{ Form::open(array('url' => 'patients')) }}
	<h1>Add Patient</h1>

	<p>
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name')) }}
	</p>

	<p> {{ Form::submit('Add') }} </p>
</body>
