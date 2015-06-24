<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 if (isset($_GET['kdkategori'])) {
	$hapuskategori = $_GET['kdkategori'];
} else {
	die ("ERROR");	
}
$query = "DELETE FROM kategori_artikel WHERE kdkategori='$hapuskategori'" ;
$sql = mysql_query ($query);

if ($query) {
    header('location:../kategori.php?hapus=success');
 }
 else { echo "ERROR!!!!";}
?>
