@extends('user_layout')

@section('content')
	<table>
	<?php $i = 1; ?>
	<tr><td>Username - Password</td></tr>
    @foreach($users as $user)
        <tr><td>{{$i}} - {{$user->name}} - {{$user->password}}</td></tr>
        <?php $i++; ?>
    @endforeach
	</table>
	<a href="{{ URL::to('logout') }}">Logout</a>
@stop