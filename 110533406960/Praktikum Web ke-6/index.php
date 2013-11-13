<!DOCTYPE HTML
	PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
	"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title> Akses dan Manipulasi Data </title>
<style type="text/css">
.even {
        background: #ddd;
}
</style> </head>


<body>


<?php
ini_set('display_errors',1);

//include file koneksi dan data handler
require_once './koneksi.php';
require_once './data_hadler.php';

//konstanta nama tabel
define('MHS','mahasiswa');

//panggil fungsi data handler
data_handler('?m=data');
?>


</body>


</html>