<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<title>Database Pasien</title>
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
	<div class="col-md-12">
      <div class="box">
          <form action="simpan_pembelian.php" method="post">
              <h1 style="text-align: center">Database Pasien</h1>
              <div class="table-responsive">
                 <table class="table" id="database">
                    <thead>
                      <tr>
                         <th>Nomor Pasien</th>
                         <th colspan="2">Nama Pasien</th>
                         <th>Tanggal Lahir</th>
                         <th colspan="2">Alamat</th>
                      </tr>
                     </thead>
                     <tbody>
                                    <?php
                                        // Create connection
                                        $servername = "localhost";
                                        $username = "localhost"; // "root" "kainkady_root"
                                        $password = ""; // "" "494032"
                                        $dbname = "test"; //"kainka" "kainkady_kainka"
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 
                                        $sql = "SELECT * FROM `nomor`"; 
                                        $result = $conn->query($sql);
                                        if($result -> num_rows > 0){
                                            while($row = $result->fetch_assoc()){

                                                //}
                                        //}
                                    ?>   
                           <tr id="tgl_<?php echo $row['tanggal']?>" style="display:none">
                             <td>
                               <input type="date" class="form-control" name="tanggal">
						                 </td>
                             <td>
                                <?php 
                                                echo $row['nomor'];?>
                             </td>
                             <td>
														 		<a href="RekamMedis.php"><?php 
                                                echo $row['nama'];?>
																</a>
                             </td>
                             <td>
                                <?php 
                                                echo $row['Tanggal_Lahir'];?>
                             </td>
                             <td>
                                            <?php 
                                                echo $row['alamat'];
                                            ?>
                             </td>
                          	 </td>
                            </tr>
                                        <?php }} ?>
                           </tbody>
                          </table>
                       </div>
                            <!-- /.table-responsive -->
                       <div class="box-footer">
                          <div class="pull-right">
                             <!--a href="catalog.html" class="btn btn-primary">Continue Shopping</a-->
                             <!--input type="submit" value="Open Data" class="co-button btn btn-primary"/-->
                             <a href="RekamMedis.php" class="btn btn-primary">Data Baru</a>
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