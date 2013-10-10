<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SK2 - Check Box dg Preselecting</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	Warna favorite <br />
	<input type="checkbox" name="warna[]" value="Merah" checked="yes" />Merah <br />
	<input type="checkbox" name="warna[]" value="Kuning" />Kuning <br />
	<input type="checkbox" name="warna[]" value="Hijau" />Hijau <br />
	<input type="checkbox" name="warna[]" value="Biru" />Biru <br />
	<input type="submit" value="OK" />
	</form>

	<?php
	if (isset($_POST['warna'])){
		foreach($_POST['warna'] as $key => $val){
		echo $val . '<br />';
		}
	}
	?>
</body>
</html>