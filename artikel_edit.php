<?php include "includes/header.php";include "includes/config.php"; if (isset($_GET['kdartikel'])) {	$kdartikel = $_GET['kdartikel'];} else {	die ("ERROR");	}$tgl_input=date("d-m-Y");$wkt_input= date("H:i:s"); $query = "SELECT * from artikel  WHERE kdartikel='$kdartikel'";$sql = mysql_query ($query);$hasil = mysql_fetch_array ($sql);$kdartikel = $hasil['kdartikel'];$kdkategori = stripslashes ($hasil['kdkategori']);$judul = stripslashes ($hasil['judul']);$pengirim = stripslashes ($hasil['pengirim']);$isi = stripslashes ($hasil['isi']);$tgl = stripslashes ($hasil['tgl']);$wkt = stripslashes ($hasil['wkt']);$baca = stripslashes ($hasil['baca']);//Mengambil data yang akan di editif(isset($_POST['Edit'])) {$kdartikel = $_POST['xkdartikel'];$kdkategori = stripslashes (strip_tags ($_POST['kdkategori']));$judul = stripslashes (strip_tags ($_POST['judul']));$pengirim = stripslashes (strip_tags ($_POST['pengirim']));$isi = mysql_real_escape_string($_POST['isi']);$tgl = stripslashes (strip_tags ($_POST['tgl']));$wkt = stripslashes (strip_tags ($_POST['wkt']));	//Proses Edit	$qUpdate = "UPDATE artikel SET kdartikel='$kdartikel',kdkategori='$kdkategori',judul='$judul',			  pengirim='$pengirim',isi='$isi',tgl='$tgl',wkt='$wkt' WHERE kdartikel='$kdartikel'";	$qResult = mysql_query($qUpdate);	?>		<meta http-equiv="Refresh" content="0; URL=artikel_tampil.php?edit=success">	<?php}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><!-- TinyMCE --><script type="text/javascript" src="includes/tinymce/jscripts/tiny_mce/tiny_mce.js"></script><script type="text/javascript">tinyMCE.init({        // General options        mode : "textareas",        theme : "advanced",        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",        // Theme options        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",        theme_advanced_toolbar_location : "top",        theme_advanced_toolbar_align : "left",        theme_advanced_statusbar_location : "bottom",        theme_advanced_resizing : true,        // Skin options        skin : "o2k7",        skin_variant : "black",        // Example content CSS (should be your site CSS)        content_css : "css/example.css",        // Drop lists for link/image/media/template dialogs        template_external_list_url : "js/template_list.js",        external_link_list_url : "js/link_list.js",        external_image_list_url : "js/image_list.js",        media_external_list_url : "js/media_list.js",        // Replace values for the template plugin        template_replace_values : {                username : "Some User",                staffid : "991234"        }});</script></head><body>		<div class="container">			<div class="hero-unit">			#Edit Artikel			<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">				<table width="100%px" border="0">					<tr>						<td width="100px">Pilih Kategori :</td>							<td width="410">								<select name="kdkategori"/> 								<?php								$disposisi_query = "SELECT * FROM kategori_artikel";								$hasil_disposisi = mysql_query($disposisi_query) or die (mysql_error());																while ($ambil = mysql_fetch_array($hasil_disposisi)){										$kdkategori = $ambil['kdkategori'];										$kategori = $ambil['kategori'];									echo "<option value=\"$kdkategori\"";										if ($kdkategori == $kdartikel) echo " selected=\"selected\"";									echo ">$kategori</option>\n";																		}								?>								</select>							</td>						</td>					</tr>					<tr>						<td width="80">Judul :</td>						<td width="410"><input name="judul" type="text" size="40" value="<?=$judul?>"/></td>					</tr>					<tr>							<td>Pengirim:</td>						<td><input name="pengirim" type="text" size="40" readonly disable="disabled" value="<?=$pengirim?>"/></td>					</tr>					<tr>						<td>Tanggal : </td>						<td><input name="tgl" type="text" size="8" readonly disable="disabled" value="<?=$tgl_input?> "/>						Waktu  : <input name="wkt" type="text" size="6" readonly disable="disabled" value="<?=$wkt_input?> "/></td>					</tr>					<tr>						<td>&nbsp;</td>						<td><textarea id="elm1" name="isi" rows="15" cols="60" ><?=$isi?></textarea></td>					</tr>					<tr>						<td>&nbsp;</td>						<td><input type="hidden" name="xkdartikel" value="<?=$kdartikel?>"> 						<input type="submit" name="Edit" value="Submit"class="btn btn-inverse"/></td>					</tr>				</table>			</form>			</div>		</div></body></html>		