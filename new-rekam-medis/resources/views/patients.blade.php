<head>
	<title>Database Pasien</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	    <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
		<script src="assets/js/ie-emulation-modes-warning.js"></script>
		<script src="assets/js/smoothscroll.js"></script>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<body>
	<div class="col-md-12" id="basket">
  	<img src="img/AVERROES LOGO TEXT.png" width = "150" height = "50">
	</div>
	<div class="col-md-12">
  	<div class="box">
			<h1 style="text-align: center">Database Pasien</h1>
    	<div class="table-responsive">
       	<table class="table table-hover" id="database">
          <thead>
						<tr>
							<th>Nomor Pasien</th>
							<th>Nama Pasien</th>
							<th>Tanggal Lahir</th>
							<th>Alamat</th>
						</tr>
       		</thead>
         	<tbody>
            {{ Form::open(array('url' => 'patients_form')) }}
           	@foreach($patients as $patient)
             	<tr class="clickable-row">
               	<td>
                  {{$patient->id}}
               	</td>
               	<td>
               		{{$patient->name}}
               	</td>
               	<td>
                	{{$patient->birthday}}
               	</td>
               	<td>
                	{{$patient->address}}
               	</td>
              </tr>
            {{ Form::submit('') }}
            @endforeach
       		</tbody>
      	</table>
      </div>
		  <div class="box-footer">
		  	<div class="pull-right">
					<a href="{{ URL::to('logout') }}" class="btn btn-primary">Logout</a>
					<a href="{{ URL::to('patients_form') }}" class="btn btn-primary"}}"> Add Patient </a>
		   	</div>
			</div>
  	</div>
	</div>
</body>

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif


<script type="text/javascript">
$(function() {
  $('div.box').on("click", "table.table-hover", function() {
    window.location = $(this).data("url");
  });
});
</script>
