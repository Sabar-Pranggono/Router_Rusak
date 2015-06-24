<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
if (isset($_POST['input'])) {
	$kdkategori = addslashes (strip_tags ($_POST['kdkategori']));
	$judul  = addslashes (strip_tags ($_POST['judul']));
	$pengirim = addslashes (strip_tags ($_POST['pengirim']));
	$isi = mysql_real_escape_string($_POST['isi']);
	$tgl = addslashes (strip_tags ($_POST['tgl']));
	$wkt = addslashes (strip_tags ($_POST['wkt']));
 
//simpan data ke database
$query = mysql_query("insert into artikel values('', '$kdkategori', '$judul', '$pengirim','$isi','$tgl','$wkt','')") or die(mysql_error());
 
if ($query) {
    header('location:../artikel_tampil.php?input=success');
 }
} else { echo "ERROR!!!!";}
?>
