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
		{{ Form::label('patient_number', '1. Nomor Pasien') }}
		{{ Form::text('patient_number', Input::old('patient_number')) }}
	</p>

	<p>
		{{ Form::label('allergy_history', '2. Riwayat Alergi') }}
		{{ Form::text('allergy_history', Input::old('allergy_history')) }}
	</p>

	<p>
		{{ Form::label('insurance', '3. Asuransi') }}
		{{ Form::text('insurance', Input::old('insurance')) }}
	</p>

	<p>
		{{ Form::label('name', '4. Nama') }}
		{{ Form::text('name', Input::old('name')) }}
	</p>

	<p>
		{{ Form::label('parents', '5. Orang Tua') }}
		{{ Form::text('parents', Input::old('parents')) }}
	</p>

	<p>
		{{ Form::label('age', '6. Umur') }}
		{{ Form::text('age', Input::old('age')) }}
	</p>

	<p>
		{{ Form::label('birthday', '7. Tanggal Lahir') }}
		{{ Form::text('birthday', Input::old('birthday')) }}
	</p>

	<p>
		{{ Form::label('partner', '8. Suami/Istri') }}
		{{ Form::text('partner', Input::old('partner')) }}
	</p>

	<p>
		{{ Form::label('gender', '9. Jenis Kelamin') }}
		{{ Form::text('gender', Input::old('gender')) }}
	</p>

	<p>
		{{ Form::label('education', '10. Pendidikan') }}
		{{ Form::text('education', Input::old('education')) }}
	</p>

	<p>
		{{ Form::label('religion', '11. Agama') }}
		{{ Form::text('religion', Input::old('religion')) }}
	</p>

	<p>
		{{ Form::label('job', '12. Pekerjaan') }}
		{{ Form::text('job', Input::old('job')) }}
	</p>

	<p>
		{{ Form::label('marriage', '13. Perkawinan') }}
		{{ Form::text('marriage', Input::old('marriage')) }}
	</p>

	<p>
		{{ Form::label('address', '14. Address') }}
		{{ Form::text('address', Input::old('address')) }}
	</p>

	<p>
		{{ Form::label('phone_number', '15. No. Telepon') }}
		{{ Form::text('phone_number', Input::old('phone_number')) }}
	</p>

	<p>
		{{ Form::label('weight', '16. Berat Badan') }}
		{{ Form::text('weight', Input::old('weight')) }}
	</p>

	<p>
		{{ Form::label('height', '17. Tinggi Badan') }}
		{{ Form::text('height', Input::old('height')) }}
	</p>

	<p>
		{{ Form::label('date', '18. Tanggal') }}
		{{ Form::text('date', Input::old('date')) }}
	</p>

	<p>
		{{ Form::label('anamnesa', '19. Anamnesa') }}
		{{ Form::text('anamnesa', Input::old('anamnesa')) }}
	</p>

	<p>
		{{ Form::label('physical_examination', '20. Pemeriksaan Fisik') }}
		{{ Form::text('physical_examination', Input::old('physical_examination')) }}
	</p>

	<p>
		{{ Form::label('diagnosis', '21. Diagnosa') }}
		{{ Form::text('diagnosis', Input::old('diagnosis')) }}
	</p>

	<p>
		{{ Form::label('act', '22. Tindakan') }}
		{{ Form::text('act', Input::old('act')) }}
	</p>

	<p>
		{{ Form::label('doctor', '23. Doktor') }}
		{{ Form::text('doctor', Input::old('doctor')) }}
	</p>

	<p> {{ Form::submit('Add') }} </p>
</body>



