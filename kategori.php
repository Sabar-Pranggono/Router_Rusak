<?php 
include "includes/header.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
	<div class="container">
		<div class="hero-unit">
			<?php
				if (!empty($_GET['hapus']) && $_GET['hapus'] == 'success') {
				echo "<div class=\"alert alert-success\">Berhasil Hapus Kategoril!</div>";
				} 
			?>
			<?php
			//Input Kategori
			IF(ISSET($_POST['Input'])){
				$kdkategori = addslashes (strip_tags ($_POST['kdkategori']));
				$kategori = addslashes (strip_tags ($_POST['kategori']));
					$cek_id=mysql_num_rows(mysql_query ("SELECT kategori FROM kategori_artikel WHERE kategori='$kategori' "));
					IF($cek_id > 0){
						echo "<div class=\"alert alert-error\">Kategori Sudah Ada !!</div>";
					}else{
				$asup = "INSERT INTO kategori_artikel(kdkategori,  kategori) VALUES ('$kdkategori','$kategori')";
				$asupkeun=mysql_query($asup);
				}
			}
				//Periksa Auto_increment	
				$sql = "SELECT kdkategori AS jml FROM kategori_artikel ORDER BY kdkategori DESC LIMIT 0,1";
				$res = mysql_query($sql);
				$row = mysql_fetch_array($res);
				$new = $row["jml"]+1;
			?>

		<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table class="none">	 
			<thead>	
				<tr>
					<td>Kode Kategori:</td>
					<td><input type="text" name="kdkategori" value="<?=$new?>" readonly></td>
				</tr>	
				<tr>	
					<td><small>Nama Kategori</td>
					<td><input type="text" name="kategori" placeholder="kategori" required autofocus></td>
				</tr>
				<tr>
					<td><input type="submit" name="Input" value="Input Kategori" class="btn btn-inverse">
					<input type="reset" name="reset" value="Reset" class="btn btn-inverse"></td>
				</tr>
			</thead>
		</table>
		</FORM>
 
		<table class="table table-striped">
		<thead>
				<tr>
					<th>No</td>
					<th>Kode Kategori</td>
					<th>Nama Kategori</td>
					<th>Action</td>
				</tr>
		</thead>
		<?php
			$no = 1;
			$query = "SELECT kdkategori, kategori from kategori_artikel ORDER BY kdkategori ASC";
			$sql = mysql_query ($query);
			while ($hasil = mysql_fetch_array ($sql)) {
				$kdkategori = stripslashes ($hasil['kdkategori']);
				$kategori = stripslashes ($hasil['kategori']);
				
		?>
		<tbody>
			<tr>
				<td><?=$no?></td>
				<td><?=$kdkategori?></td>
				<td><?=$kategori?></td> 
				<td align="center">
				<script>
					function confirmDelete(delUrl) {
					if (confirm("Apakah Kategori ini ingin Di hapus?")) {
					document.location = delUrl;
						}
					}
				</script>
					<a href="javascript:confirmDelete('<?=$path?>kategori_hapus.php?kdkategori=<?=$kdkategori?>')" title="Hapus <?=$kategori?>">HAPUS</a>
				</td>
			</tr>
		</tbody>		
			<?php $no++; }?>
		</table>
		</div>
	</div>
</body>
<html>
