<!DOCTYPE HTML
	PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
	"http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Tambah Data</title>
</head>

<body>

<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
<table>
	<tr>
		<td>NIM</td>
		<td><input type="text" name="nim" /></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" size=40 /></td>
		</tr>
		<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" size=60 /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan" /></td>
		</tr>
	</table>
	
</form>

<?php
require_once './koneksi.php';

//Jika field nim dan nama diisi lalu disubmit
if (isset($_POST['nim']) && isset($_POST['nama'])){
	$nim	= $_POST['nim'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	
	//Tambahkan data baru ke tabel
	$sql = "INSERT into mahasiswa
			VALUES('" .$nim. "', '" .$nama. "', '" .$alamat. "' )";
	
	$res = mysql_query($sql);
	if($res){
		echo 'Data Berhasil ditambahkan';
		mysql_close($res);
	}else{
		echo 'Gagal menambah data <br />';
		echo mysql_error();
	}
}

echo '<hr />';
//memanfaatkan script pengambilan data untuk menmapilkan hasil
require_once './seleksi.php';
?>

</body>
</html>