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
          <form action="simpan_pembelian.php" method="post">
              <h1>Shopping Cart</h1>
              <div class="table-responsive">
                <div class="content">
                   <div class="row">
                      <div class="col-sm-6">
                      	<div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" class="form-control namecookie" name="nama" required>
                        </div>
                      </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="alamat">Address</label>
                          <input type="text" class="form-control namecookie" name="alamat" required>
                        </div>
                      </div>
                     </div>
                     <div class="row">
                       <div class="col-sm-6">
                        	<div class="form-group">
                            <label for="street">Phone Number</label>
                            <input type="text" class="form-control namecookie" name="no_hp" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <table class="table" id="countit">
                    <thead>
                      <tr>
                         <th colspan="2">Product</th>
                         <th>Quantity</th>
                         <th>Unit price</th>
                         <th colspan="2">Total</th>
                      </tr>
                     </thead>
                     <tbody>
                                    <?php
                                        // Create connection
                                        $servername = "localhost";
                                        $username = "kainkady_root"; // "root" "kainkady_root"
                                        $password = "494032"; // "" "494032"
                                        $dbname = "kainkady_kainka"; //"kainka" "kainkady_kainka"
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        } 
                                        $sql = "SELECT * FROM `produk`"; 
                                        $result = $conn->query($sql);
                                        if($result -> num_rows > 0){
                                            while($row = $result->fetch_assoc()){

                                                //}
                                        //}
                                    ?>   
                           <tr id="product_<?php echo $row['id_produk']?>" style="display:none">
						                 <td>
                                <a href="<?php echo $row['nama_produk'] ?>.html"><img src= "<?php echo $row['gambar_produk'] ?>" >
                                </a>
                             </td>
                             <td>
														 		<a href="<?php echo $row['nama_produk'] ?>.html"><?php 
                                                echo $row['nama_produk'];?>
																</a>
                             </td>
                             <td class="unit_number">
                                <input type="number" min="1" value="0" class="form-control" name="produk[<?php echo $row['id_produk']?>]">
                             </td>
                             <td class="unit_price">
                                            <?php 
                                                echo $row['harga_produk'];
                                            ?>
                             </td>
                          	 <td class="subtotal_price">0</td>
                            		<td class='deleterow'>
                                   <i class='fa fa-trash-o'></td> 
                            </tr>
                                        <?php }} ?>
                           </tbody>
                           <tfoot>
                             <tr>
                               <th colspan="5">Total</th>
                               <th colspan="2" class="total_price">0</th>
                             </tr>
                            </tfoot>
                          </table>
                       </div>
                            <!-- /.table-responsive -->
                       <div class="box-footer">
                          <div class="pull-right">
                             <a href="catalog.html" class="btn btn-primary">Continue Shopping</a>
                             <input type="submit" value="Check Out" class="co-button btn btn-primary"/>
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