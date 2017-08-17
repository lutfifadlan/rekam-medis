<?php
  use App\Patient;
?>

<head>
	<title>Patient Form</title>
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
	<div class="col-md-12" id="basket">
      	<div class="box">
      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      		{{ Form::open(array('url' => 'patients')) }}
          	<h1 style="text-align: center">Data Rekam Medis</h1>
          	<div class="table-responsive">
                <div class="content">
                   <div class="row">
                      <div class="col-sm-4">
                      	<div class="form-group">
                            <label for="patient_number">Nomor Pasien</label>
                            <?php
                              if (Patient::all() -> last() === null && $_POST['id'] === null) {
                                echo 0;
                              } else if ($_POST['id'] !== null) {
                                echo $_POST['id'];
                              } else {
                                echo Patient::all() -> last() -> value('id');
                              }
                            ?>
                        </div>
                      </div>
                      <div class="col-sm-4">
                      	<div class="form-group">
                            <label for="allergy_history">Riwayat Alergi</label>
                            <input type="text" class="form-control namecookie" name="allergy_history">
                        </div>
                      </div>
                      <div class="col-sm-4">
                      	<div class="form-group">
                            <label for="insurance">Asuransi</label>
                            <input type="text" class="form-control namecookie" name="insurance">
                        </div>
                      </div>
                    </div>
                   <div class="row">
                      <div class="col-sm-6">
                      	<div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control namecookie" name="name" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                      	<div class="form-group">
                            <label for="parents">Orang Tua</label>
                            <input type="text" class="form-control namecookie" name="parents">
                        </div>
                      </div>
                    </div>
                   <div class="row">
                      <div class="col-sm-2">
                      	<div class="form-group">
                            <label for="age">Umur</label>
                            <input type="number" class="form-control namecookie" name="age" required>
                        </div>
                      </div>
                      <div class="col-sm-4">
                      	<div class="form-group">
                            <label for="birthday">Tanggal Lahir</label>
                            <input type="date" class="form-control namecookie" name="birthday" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                      	<div class="form-group">
                            <label for="partner">Suami/Istri</label>
                            <input type="text" class="form-control namecookie" name="partner">
                        </div>
                      </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="gender">Jenis Kelamin</label>
                          <input type="text" class="form-control namecookie" name="gender" required>
              <!--             <div class="form-group">
                            <form id ="gender" method="post">
                              <select name="gender">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                                <option value="Lainnya">Lainnya</option>
                              </select> 
                            </form>
                          </div> -->
                        </div>
                      </div>
                       <div class="col-sm-6">
                        	<div class="form-group">
                            <label for="education">Pendidikan</label>
                            <input type="text" class="form-control namecookie" name="education">
                          </div>
                        </div>
                     </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="religion">Agama</label>
                          <input type="text" class="form-control namecookie" name="religion">
                        </div>
                      </div>
                       <div class="col-sm-6">
                        	<div class="form-group">
                            <label for="job">Pekerjaan</label>
                            <input type="text" class="form-control namecookie" name="job">
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="marriage">Perkawinan</label>
                          <input type="text" class="form-control namecookie" name="marriage">
                        </div>
                      </div>
                       <div class="col-sm-6">
                        	<div class="form-group">
                            <label for="address">Alamat</label>
                            <input type="text" class="form-control namecookie" name="address" required>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-sm-6">
                        	<div class="form-group">
                            <label for="phone_number">No. Telepon</label>
                            <input type="number" class="form-control namecookie" name="phone_number" required>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-sm-3">
                        	<div class="form-group">
                            <label for="weight">Berat Badan</label>
                            <input type="number" class="form-control namecookie" name="weight" required>
                          </div>
                        </div>
                       <div class="col-sm-3">
                        	<div class="form-group">
                            <label for="height">Tinggi Badan</label>
                            <input type="number" class="form-control namecookie" name="height" required>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                    <table class="table" id="rekam">
						<tr>
							<th>Tanggal</th>
							<th>Anamnesa</th>
							<th>Pemeriksaan Fisik</th>
							<th>Diagnosa</th>
							<th>Tindakan</th>
							<th>Dokter</th>
						</tr>
                    	<tr>
                         	<td>
                               <input type="date" class="form-control" name="date" required>
		                 	</td>
                         	<td>
                                <input type="text" class="form-control" name="anamnesa" required>
	                 		</td>
                     		<td>
                                <input type="text" class="form-control" name="physical_examination" required>
                     		</td>
                     		<td>
                                <input type="text" class="form-control" name="diagnosis" required>
                     		</td>
                     		<td>
                                <input type="text" class="form-control" name="act" required>
                     		</td>
                  	 		<td>
                               <input type="text" class="form-control" name="doctor" required>
                     		</td>
                        </tr>     
                  	</table>
                   	<div class="box-footer">
                  		<div class="pull-right">
                             <input type="submit" value="Save Data" class="co-button btn btn-primary"/>
                       	</div>
            		</div>
            	</div>
            </div>
        </div>
  	</div>
</body>



