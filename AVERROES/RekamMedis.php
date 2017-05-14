<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<title>Klinik Averroes </title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

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
    <a href="#home"><img src="AVERROES LOGO TEXT.png" width = "150" height = "50"></a>
  </div>
	<div class="col-md-12" id="basket">
      <div class="box">
          <form action="simpan_rekam.php" method="post">
              <h1 style="text-align: center">Data Rekam Medis</h1>
              <div class="table-responsive">
                <div class="content">
                   <div class="row">
                      <div class="col-sm-4">
                      	<div class="form-group">
                            <label for="nomor">Nomor Pasien</label>
                            <input type="text" class="form-control namecookie" name="nomor" required>
                        </div>
                      </div>
                      <div class="col-sm-4">
                      	<div class="form-group">
                            <label for="alergi">Riwayat Alergi</label>
                            <input type="text" class="form-control namecookie" name="alergi" required>
                        </div>
                      </div>
                      <div class="col-sm-4">
                      	<div class="form-group">
                            <label for="asuransi">Asuransi</label>
                            <input type="text" class="form-control namecookie" name="asuransi" required>
                        </div>
                      </div>
                    </div>
                   <div class="row">
                      <div class="col-sm-6">
                      	<div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" class="form-control namecookie" name="nama" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                      	<div class="form-group">
                            <label for="orang_tua">Orang Tua</label>
                            <input type="text" class="form-control namecookie" name="orang_tua" required>
                        </div>
                      </div>
                    </div>
                   <div class="row">
                      <div class="col-sm-2">
                      	<div class="form-group">
                            <label for="Umur">Umur</label>
                            <input type="text" class="form-control namecookie" name="Umur" required>
                        </div>
                      </div>
                      <div class="col-sm-4">
                      	<div class="form-group">
                            <label for="Tanggal_Lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control namecookie" name="Tanggal_Lahir" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                      	<div class="form-group">
                            <label for="pasangan">Suami/Istri</label>
                            <input type="text" class="form-control namecookie" name="pasangan" required>
                        </div>
                      </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                          <input type="text" class="form-control namecookie" name="jenis_kelamin" required>
                        </div>
                      </div>
                       <div class="col-sm-6">
                        	<div class="form-group">
                            <label for="Pendidikan_Pasangan">Pendidikan Pasangan</label>
                            <input type="text" class="form-control namecookie" name="Pendidikan_Pasangan" required>
                          </div>
                        </div>
                     </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="agama">Agama</label>
                          <input type="text" class="form-control namecookie" name="agama" required>
                        </div>
                      </div>
                       <div class="col-sm-6">
                        	<div class="form-group">
                            <label for="Pekerjaan_Pasangan">Pekerjaan Pasangan</label>
                            <input type="text" class="form-control namecookie" name="Pekerjaan_Pasangan" required>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="perkawinan">Perkawinan</label>
                          <input type="text" class="form-control namecookie" name="perkawinan" required>
                        </div>
                      </div>
                       <div class="col-sm-6">
                        	<div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control namecookie" name="alamat" required>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="pendidikan">Pendidikan</label>
                          <input type="text" class="form-control namecookie" name="pendidikan" required>
                        </div>
                      </div>
                       <div class="col-sm-6">
                        	<div class="form-group">
                            <label for="nomor_telpon">No. Telpon</label>
                            <input type="text" class="form-control namecookie" name="nomor_telpon" required>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="pekerjaan">Pekerjaan</label>
                          <input type="text" class="form-control namecookie" name="pekerjaan" required>
                        </div>
                      </div>
                       <div class="col-sm-3">
                        	<div class="form-group">
                            <label for="bb">Berat Badan</label>
                            <input type="number_format" class="form-control namecookie" name="berat_badan" required>
                          </div>
                        </div>
                       <div class="col-sm-3">
                        	<div class="form-group">
                            <label for="tb">Tinggi Badan</label>
                            <input type="number_format" class="form-control namecookie" name="tinggi_badan" required>
                          </div>
                        </div>
                    </div>
                  </div>
                    <table class="table" id="rekam">
                    <thead>
                      <tr>
                         <th>Tanggal</th>
                         <th>Anamnesa</th>
                         <th colspan="2">Pemeriksaan Fisik</th>
                         <th colspan="2">Diagnosa</th>
                         <th>Tindakan</th>
                         <th>Dokter</th>
                      </tr>
                     </thead>
                     <tbody>
                                    <?php
                                        // Create connection
                                        $servername = "localhost";
                                        $username = "localhost"; // "root" "kainkady_root"
                                        $password = ""; // "" "494032"
                                        $dbname = "Rekam_Medis"; //"kainka" "kainkady_kainka"
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if (mysqli_connect_error()) {
                                          die("Database connection failed: " . mysqli_connect_error());
                                          }
                                          echo "connection successful" ;
                                    ?>   
                           
                            <tr id="tgl_<?php echo $row['tanggal']?>" style="display:none">
                             <td>
                               <input type="date" class="form-control" name="tanggal">
						                 </td>
                             <td>
                                <input type="text" class="form-control" name="anamnesa">
						                 </td>
                             <td colspan="2">
                                <input type="text" class="form-control" name="fisik">
                             </td>
                             <td class="diagnosa" colspan="2">
                                <input type="text" class="form-control" name="diagnosa">
                             </td>
                             <td class="tindakan">
                                <input type="text" class="form-control" name="tindakan">
                             </td>
                          	 <td class="dokter">
                               <input type="text" class="form-control" name="dokter">
                             </td>

                            </tr>  
                            <tr id="tgl_<?php echo $row['tanggal']?>" style="display:none">
                              <div class="col-sm-1">
                                <div class="form-group">
                                  <input type="date" class="form-control" name="tanggal" required>
                                </div>
                              </div>
                              
                              <div class="col-sm-2">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="anamnesa" required>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="fisik" required>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="diagnosa" required>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="tindakan" required>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="dokter" required>
                                </div>
                              </div>

                            </tr>        <?php //}} ?>
                           </tbody>
                          </table>
                       </div>
                            <!-- /.table-responsive -->
                       <div class="box-footer">
                          <div class="pull-right">
                             <input type="submit" value="Save Data" class="co-button btn btn-primary"/>
                           </div>
                        </div>
                     </form>
                    <!-- /.box -->
                    </div>
                  </div>
	      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
	</div>
		
</body>

</html>