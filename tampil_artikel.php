<?php 
include "includes/index.php";
?>
<body>		
	<div class="container">
		<div class="hero-unit">
			<?php
			if (!empty($_GET['hapus']) && $_GET['hapus'] == 'success') {
			echo "<div class=\"alert alert-success\">Berhasil Hapus Artikel!</h3></div>";
			} elseif (!empty($_GET['edit']) && $_GET['edit'] == 'success') {
			echo "<div class=\"alert alert-success\">Berhasil Edit POSTING!</h3></div>";
			}
			?>
			<tr>
				<th>No</td>
				<th>Kategori</td>
				<th>Judul</td>
				<th>Pengirim</td>
				<th>Tanggal</td>
				<th>Waktu</td>
				<th>Pembaca</td>
				<th>Action</td>
			</tr>
			</thead>
			<?php 
			$no = 1;
			$sQuery = mysql_query("SELECT * FROM tampil ORDER BY kdartikel ASC");
				WHILE ($rQuery = mysql_fetch_array($sQuery)){	
					$kdartikel = stripslashes ($rQuery['kdartikel']);
					$kdkategori = stripslashes ($rQuery['kdkategori']);
					$judul = $rQuery['judul'];
					$pengirim = $rQuery['pengirim'];
					$tgl = $rQuery['tgl'];
					$wkt = $rQuery['wkt'];
					$baca = $rQuery['baca'];
					$rowset = mysql_query("SELECT * from kategori_artikel WHERE kdkategori='".$kdkategori."'");
						while($relasikat = mysql_fetch_array($rowset)){
			?>		
			<tbody>
			<tr>
				<td><small><?=$no?></small></td>
				<td><small><?=$relasikat['kategori']?></small></td>
				<td><small><?=$judul?></small></td> 
				<td><small><?=$pengirim?></small></td> 
				<td><small><?=$tgl?></small></td>
				<td><small><?=$wkt?></small></td>
				<td><small><?=$baca?></small></td> 	
				<td align="center">&nbsp
				<a href="artikel_edit.php?kdartikel=<?=$kdartikel?>" title="Edit <?=$judul?>">EDIT</a> &nbsp;|
				<a href="<?=$path?>artikel_hapus.php?kdartikel=<?=$kdartikel?>"title="Hapus <?=$judul?>">HAPUS</a></td>
			</tr>	
			</tbody>		
			<?php $no++; }}?>		
			</table>
		</div>
	</div>
</body>	
