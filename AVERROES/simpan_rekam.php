<?php
$nama =  $_REQUEST['nama']; 
$alamat = $_REQUEST['alamat'];
$nomor = $_REQUEST['nomor'];
$alergi = $_REQUEST['alergi'];
$asuransi =  $_REQUEST['asuransi']; 
$ortu = $_REQUEST['ortu'];
$umur = $_REQUEST['umur'];
$TL = $_REQUEST['TL'];
$pasangan =  $_REQUEST['pasangan']; 
$kelamin = $_REQUEST['kelamin'];
$sangdik = $_REQUEST['sangdik'];
$agama = $_REQUEST['agama'];
$sangker =  $_REQUEST['sangker']; 
$kawin = $_REQUEST['kawin'];
$no_hp = $_REQUEST['no_hp'];
$produk = $_REQUEST['produk'];
$didik = $_REQUEST['didik'];
$telp =  $_REQUEST['telp']; 
$kerja = $_REQUEST['kerja'];
$bb = $_REQUEST['bb'];
$tb = $_REQUEST['tb'];

// echo $produk[2];
// return;
$servername = "localhost";
$username = "root"; // "root" "kainkady_root"
$password = ""; // "" "494032"
$dbname = ""; //"kainka" "kainkady_kainka"

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `order` (nama, alamat, no_hp)
VALUES ('$nama', '$alamat', '$no_hp')";

if ($conn->query($sql) === TRUE) {
    // echo "New record " . $conn->insert_id . " created successfully";
   	$id_order = $conn->insert_id;
    foreach ($produk as $id_produk => $jumlah) {
    	if ($jumlah < 1) {
    		continue;
    	}
    	$sql = "INSERT INTO `order_produk` (id_order, id_produk, jumlah)
			VALUES ('$id_order', '$id_produk', '$jumlah')";
		$conn->query($sql);
    }

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>