<?php
$nama =  $_REQUEST['nama']; 
$alamat = $_REQUEST['alamat'];
$nomor = $_REQUEST['nomor'];
$alergi = $_REQUEST['alergi'];
$asuransi =  $_REQUEST['asuransi']; 
$orang_tua = $_REQUEST['orang_tua'];
$umur = $_REQUEST['umur'];
$Tanggal_Lahir = $_REQUEST['Tanggal_Lahir'];
$pasangan =  $_REQUEST['pasangan']; 
$jenis_kelamin = $_REQUEST['jenis_kelamin'];
$Pendidikan_Pasangan = $_REQUEST['Pendidikan_Pasangan'];
$agama = $_REQUEST['agama'];
$Pekerjaan_Pasangan =  $_REQUEST['Pekerjaan_Pasangan']; 
$perkawinan = $_REQUEST['perkawinan'];
$pendidikan = $_REQUEST['pendidikan'];
$nomor_telpon =  $_REQUEST['nomor_telpon']; 
$pekerjaan = $_REQUEST['pekerjaan'];
$berat_badan = $_REQUEST['berat_badan'];
$tinggi_badan = $_REQUEST['tinggi_badan'];

// echo $produk[2];
// return;
$servername = "localhost";
$username = "root"; // "root" "kainkady_root"
$password = ""; // "" "494032"
$dbname = "Rekam_Medis"; //"kainka" "kainkady_kainka"

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `rekam` (nomor, alergi, asuransi, nama, orang_tua, Tanggal_Lahir, pasangan, jenis_kelamin, Pendidikan_Pasangan, agama, Pekerjaan_Pasangan, perkawinan, alamat, pendidikan, nomor_telpon, pekerjaan, berat_badan, tinggi_badan)
VALUES ('$nomor', '$alergi', '$asuransi', '$nama', '$orang_tua', '$Tanggal_Lahir', '$pasangan', '$jenis_kelamin', '$Pendidikan_Pasangan', '$agama', '$Pekerjaan_Pasangan', '$perkawinan', '$alamat', '$pendidikan', '$nomor_telpon', '$pekerjaan', '$berat_badan', '$tinggi_badan')";

if ($conn->query($sql) == TRUE) {
    echo "New record " . $conn->insert_id . " created successfully";
   	/**$id_order = $conn->insert_id;
    foreach ($produk as $id_produk => $jumlah) {
    	if ($jumlah < 1) {
    		continue;
    	}
    	$sql = "INSERT INTO `order_produk` (id_order, id_produk, jumlah)
			VALUES ('$id_order', '$id_produk', '$jumlah')";
		$conn->query($sql);
    }**/

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>