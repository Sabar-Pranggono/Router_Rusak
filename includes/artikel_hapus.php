<?php//panggil file config.php untuk menghubung ke serverinclude('config.php'); if (isset($_GET['kdartikel'])) {	$hapusartikel = $_GET['kdartikel'];} else {	die ("ERROR");	}$query = "DELETE FROM artikel WHERE kdartikel='$hapusartikel'";$sql = mysql_query ($query);if ($query) {    header('location:../artikel_tampil.php?hapus=success'); } else { echo "ERROR!!!!";}?>