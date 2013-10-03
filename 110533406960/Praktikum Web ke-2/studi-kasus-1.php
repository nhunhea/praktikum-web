<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Studi Kasus 1 - evania</title>
	</head>
	<body>
		<form name="jamm" method="post" action="#">
			Jam : <input type="text" name="Jam">
			<input type="submit" name="submit" value="OK">
		</form>
		<?php
			function jenis($nilai){			
				if($nilai>=1 && $nilai<11){
					$ucapan = "Selamat Pagi...";
				}elseif($nilai>=11 && $nilai<15){
					$ucapan = "Selamat Siang..";
				}elseif($nilai>=15 && $nilai<18){
					$ucapan = "Selamat Sore..";
				}elseif($nilai>=18 && $nilai<23){
					$ucapan = "Selamat Malam..";
				}else{
					$ucapan = "";
				};	
				return ($ucapan);
			};
			$jam = $_POST['Jam'];
			echo "<strong>".jenis($jam)."</strong>";
		?>
	</body>
</html>