<?php
error_reporting(E_ALL ^ E_DEPRECATED);
ini_set('display_errors',0);
include 'includes/config.php';
$path = 'includes/';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo JUDUL; ?></title>
		<link rel="Shortcut Icon" href="../img/logo.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <link href="<?php echo $path; ?>bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $path; ?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo $path; ?>js/jquery-1.7.2.js"></script>
        <script type="text/javascript" src="<?php echo $path; ?>bootstrap/js/bootstrap.js"></script>
        <style>
            header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: pink;
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
				background-image: url(images/dark-wood.jpg);}
			header {
				height: 160px;
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
      
    </head>
    <body>
      <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="active">
                            <li><a href="index.php">Home</a></li>
							<li><a href="profil.php">Profil</a></li>
							<li><a href="index.php">Artikel</a></li>
							<li><a href="index.php">Contack</a><li>
                        </li>
						<ul class="nav nav-pills">
							<li class="dropdown" id="menu1">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
									Posts
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a href="artikel.php">Input</a></li>
									<li><a href="artikel_tampil.php">View</a></li>
								</ul>
							</li>
							<li>
								<a href="kategori.php">Kategori</a>
							</li>
						</ul>
					</ul>
					 
                    <ul class="nav pull-right">
							<li><a>Selamat Datang Admin</a></li>
							<li><a href="http://sabar11.blogspot.com" target="_blank" title="Go To Website">Sabar pranggono</a></li>
                     </ul>
                </div>
            </div>
        </div>
		<div class="container">
