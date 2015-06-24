<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
$timezone = "Asia/Jakarta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);

//KONEKSI DATABASE
$host = "localhost";
$user = "root";
$pass = "";
$db = "router_rusak";
$konek = mysql_connect ($host, $user, $pass);
if ($konek) {
	$isi = mysql_select_db ($db);
	if (!$isi) {
		die ("Database Tidak dapat dibuka, atau belum di masukkan");	
	}
} else {
	die ("Server MySQL tidak terhubung");	
}
if (!defined("JUDUL")) define("JUDUL", "router_rusak");

?>
