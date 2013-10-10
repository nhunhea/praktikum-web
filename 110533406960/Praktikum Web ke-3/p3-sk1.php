<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 
<head>
<title>SK2 - Seleksi dg Preselekting </title> 
</head> 
<body>
	<?php
			$pilihan = $_POST['warna'];
			if(!isset($pilihan)){
				$warna="Merah";}
			else{
				$warna=$pilihan;};
	?>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Warna Favorite : 
    <select name="warna">
		<option value="Merah" <?php if($warna=="Merah"){echo "selected=\"selected\"";}; ?>>Merah</option>
		<option value="Kuning" <?php if($warna=="Kuning"){echo "selected=\"selected\"";}; ?>>Kuning </option>
		<option value="Hijau" <?php if($warna=="Hijau"){echo "selected=\"selected\"";}; ?>>Hijau </option>
		<option value="Biru" <?php if($warna=="Biru"){echo "selected=\"selected\"";}; ?>>Biru </option>
		<option value="Putih" <?php if($warna=="Putih"){echo "selected=\"selected\"";}; ?>>Putih </option>
    </select> 
    <input type="submit" value="ok" /> 
	</form> 
	<?php 
		if(isset($pilihan)){
			echo $pilihan;
		};
	?>
	<!--?php
		if (isset($_POST['warna'])){
		echo $_POST['warna'];
		}
	?-->
</body>
</html>
