<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Halaman Administrator</title>
	<h1 style="background-color:#f07800" align="center"> Autentifikasi-Session </h1>
	<style type="text/css">
	.inner {
	margin: 70px auto;
	padding: 20px;
	width: 240px;
	border: 10px solid#f07800;
	}
	</style>
</head>

<body>
	<?php
	ini_set('display_errors', 1);
	define('_VALID', 1);
	// include file eksternal
	require_once('./auten.php');
	init_login();
	validate();
	?>
	<h3 style align="center">Selamat Datang di Halaman Administrators</h3>
	<p style="border:double" align="center"> Pada halaman ini administrator dapat melakukan apa saja<br>
	<a href="?m=logout">LOGOUT</a>
	</p>
</body>
</html>