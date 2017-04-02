@extends('layout')

@section('content')
	<table>
	<?php $i = 1; ?>
	<tr><td>Nomor Pasien - Riwayat Alergi - Asuransi - Nama - Orang Tua - Umur - Tanggal Lahir - Suami/Istri - Jenis Kelamin - Pendidikan - Agama - Pekerjaan - Perkawinan - Alamat - No. Telepon - Berat Badan - Tinggi Badan - Tanggal - Anamnesa - Pemeriksaan Fisik - Diagnosa - Tindakan - Dokter</td></tr>
    @foreach($patients as $patient)
        <tr><td>{{$i}} - {{$patient->patient_number}} - {{$patient->allergy_history}} - {{$patient->insurance}} - {{$patient->name}} - {{$patient->parents}} - {{$patient->age}} - {{$patient->birthday}} - {{$patient->partner}} - {{$patient->gender}} - {{$patient->education}} - {{$patient->religion}} - {{$patient->job}} - {{$patient->marriage}} - {{$patient->address}} - {{$patient->phone_number}} - {{$patient->weight}} - {{$patient->height}} - {{$patient->date}} - {{$patient->anamnesa}} - {{$patient->physical_examination}} - {{$patient->diagnosis}} - {{$patient->act}} - {{$patient->doctor}}</td></tr>
        <?php $i++; ?>
    @endforeach
	</table>
	<a href="{{ URL::to('logout') }}">Logout</a>
	<a href="{{ URL::to('patients_form') }}"> Add Patient </a>
@stop

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
