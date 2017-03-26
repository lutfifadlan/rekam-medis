@extends('layout')

@section('content')
	<table>
	<?php $i = 1; ?>
	<tr><td>Nama - Umur - Tanggal Lahir - Alamat - Tanggal dibuat - Tanggal diperbaharui</td></tr>
    @foreach($patients as $patient)
        <tr><td>{{$i}} - {{$patient->name}} - {{$patient->age}} - {{$patient->dateofbirth}} - {{$patient->address}} - {{$patient->created_at}} - {{$patient->updated_at}}</td></tr>
        <?php $i++; ?>
    @endforeach
	</table>
	<a href="{{ URL::to('logout') }}">Logout</a>
	<a href="{{ URL::to('patients_form') }}"> Add Patient </a>
@stop