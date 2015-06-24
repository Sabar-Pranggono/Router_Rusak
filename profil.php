<?php
error_reporting(-1);
include "includes/header.php";
//DATE
$timezone = "Asia/Jakarta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$tgl_input=date("d-m-Y");
$wkt_input= date("H:i:s"); 
?>
<html>
	<head>
	<head>
		<title>Profil</title>
		<style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("images/Rinko-Bintang.gif");
				background-position: center;
				font-family: Georgia, Times, serif;
				line-height: 1.4em;
				margin: 0px;}
			.wrapper {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 2px solid #000000;
				background-color: #ffffff;}
			header {
				height: 200px;
				background-image: url(images/ho.JPG);}
			h1 {
				text-indent: -9999px;
				width: 940px;
				height: 130px;
				margin: 0px;}
			nav, footer {
				clear: both;
				color: #ffffff;
				background-color: #aeaca8;
				height: 30px;}
			nav ul {
				margin: 0px;
				padding: 5px 0px 5px 30px;}
			nav li {
				display: inline;
				margin-right: 40px;}
			nav li a {
				color: #ffffff;}
			nav li a:hover, nav li a.current {
				color: #000000;}
			section.courses {
				float: left;
				width: 659px;
				border-right: 1px solid #eeeeee;}
			article {
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 40px;}
			figure {
				float: left;
				width: 290px;
				height: 220px;
				padding: 5px;
				margin: 20px;
				border: 1px solid #eeeeee;}
			figcaption {
				font-size: 90%;
				text-align: left;}
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
			a {
				color: #de6581;
				text-decoration: none;}
			h1, h2, h3 {
				font-weight: normal;}
			h2 {
				margin: 10px 0px 5px 0px;
				padding: 0px;}
			h3 {
				margin: 0px 0px 10px 0px;
				color: #de6581;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #de6581;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
		</style>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
	 <left><ul><a href="index.html" title="home"></a>
	<a href="Profil.html" title="Profil"></a>
		<div class="wrapper">
			<header>
				<h1>INI ADALAH BLOGKU</h1>
				<nav>
					<ul>
						<li><a href="index.html" class="current">Home</a></li>
						<li><a href=" Profil.html">Profil</a></li>
						<li><a href="Artikel.html">Artikel</a></li>
						<li><a href="">tentang</a></li>
						<li><a href="">kontak</a></li>
					</ul>
				</nav>
				<p><table align="center" border="0" bgcolor="" cellpadding="0" cellspacing="8" ><marquee behavior="alternate"> Profilku</marquee>
      <td><tr><td colspan="2" align="center"><font face="Bauhaus 93" size="8" color="#0066FF"><b></b></td></tr>
      <tr><br><table>
	  
<P align="center"><font color="red">
      <img src="sab.JPG" border="7" width="250" height="300">
<tr><td align="right"><font size="2" color="red"><b><p align='left'>NAMA</p></b></td>
      <td><font size="5"color="red">: SABAR Pranggono </p></td></tr>
      <td align="right"><font size="2" color="red"><b><p align='left'>ALAMAT</p></b></td>
<td><font size="4"color="red">: KRATON</td></tr>
      <td align="right"><font size="2" color="#blue"><b><p align='left'>TTL</p></b></td>
      <td><font size="5"color="red">: Kendari, 04-juli-1994</td></tr>
      <td align="right"><font size="2" color="red"><b><p align='left'>PEKERJAAN</p></b></td>
      <td><font size="5"color="red">: Mahasiswa</td></tr>
      <td align="right"><font size="2" color="red"><b><p align='left'>HOBY</p></b></td>
      <td><font size="5"color="red">: olahraga</td></tr>
      <td align="right"><font size="2" color="red"><b><p align='left'>NO.TELPONE</p></b></td>
      <td><font size="5"color="red">: 081914736862</td></tr>
      <td align="right"><font size="2" color="red"><b><p align='left'>EMAIL</p></b></td>
      <td><font size="5"color="red">: sabar110313@gmail.com</td>
      </tr></table>
	       <tr><br><table>
<P align="center"><font color="pink">
      <img src="wildan.jpg" border="7" width="250" height="300">
<tr><td align="right"><font size="2" color="#00FFFF"><b><p align='left'>NAMA</p></b></td>
      <td><font size="5"color="#00FFFF">: wildan Akmala</p></td></tr>
      <td align="right"><font size="2" color="#00FFFF"><b><p align='left'>ALAMAT</p></b></td>
<td><font size="4"color="#00FFFF">: banyuwangi</td></tr>
      <td align="right"><font size="2" color="#00FFFF"><b><p align='left'>TTL</p></b></td>
      <td><font size="5"color="#00FFFF">: banyuwangi, 26-april-1995</td></tr>
      <td align="right"><font size="2" color="#00FFFF"><b><p align='left'>PEKERJAAN</p></b></td>
      <td><font size="5"color="#00FFFF">: Mahasiswa</td></tr>
      <td align="right"><font size="2" color="#00FFFF"><b><p align='left'>HOBY</p></b></td>
      <td><font size="5"color="#00FFFF">: olahraga</td></tr>
      <td align="right"><font size="2" color="#00FFFF"><b><p align='left'>NO.TELPONE</p></b></td>
      <td><font size="5"color="#00FFFF">: 089765566787</td></tr>
      <td align="right"><font size="2" color="#00FFFF"><b><p align='left'>EMAIL</p></b></td>
      <td><font size="5"color="#00FFFF">: wildan akmala@gmail.com</td>
      </tr></table>
<table><P align="center"><font color="#orange"><img src="gambar/bram.JPG" border="7" width="250" height="300"></p>
      <tr><td align="right"><font size="5" color="#00FFFF"><b><p align='left'>NAMA</p></b></td>
            <td><font size="5"color="#00FFFF">: Achmad Hadi Prayoga.</p></td></tr>
            <td align="right"><font size="5" color="#00FFFF"><b><p align='left'>ALAMAT</p></b></td>
            <td><font size="4"color="#00FFFF">: ambulu</td></tr>
            <td align="right"><font size="5" color="#00FFFF"><b><p align='left'>TTL</p></b></td>
            <td><font size="5"color="#00FFFF">: Bedengang, 25-september-1995</td></tr>
            <td align="right"><font size="5" color="#00FFFF"><b><p align='left'>PEKERJAAN</p></b></td>
            <td><font size="5"color="#00FFFF">: Mahasiswa</td></tr>
            <td align="right"><font size="5" color="#00FFFF"><b><p align='left'>NO.TELPONE</p></b></td>
            <td><font size="5"color="#00FFFF">: XXXXXXXXXXXXXX </td>
      </tr></table></td>
			</header>
		</div><!-- .wrapper -->
	</body>
</html>