<!DOCTYPE html>
<html>
	<head>
		<title>Tugas Praktikum - Halaman Administrator</title>
		<style>
		.inner 
		{
			margin: 200px auto;
			padding: 20px;
			width: 240px;
			border: 1px solid #333;
		}
		</style>
	</head>
	<body>
		<?php
			session_start();
			ini_set('display_errors', 1);
			define('_VALID', 1);
			//include file eksternal
			include('auth.php');
			init_login();
			validate();
		?>
		<h3>Halaman Admin</h3>
		<p>
			<a href="?m=logout">Logout</a>
		<p>
		Menu-menu admin ada disini
	</body>
</html>