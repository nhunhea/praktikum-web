<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Studi Kasus 2 - evania</title>
	</head>
	<body>
		<form name="main" method="post" action="#">
			<table>
				<tr>
					<td>Jumlah Kolom</td>
					<td><input type="text" name="kolom"></td>
				</tr>
				<tr>
					<td>Jumlah Baris</td>
					<td><input type="text" name="baris"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Buat Tabel"></td>
				</tr>
			</table>
		</form>
		<br />
		<table border="1">
			<?php
				$kolom = $_POST['kolom'];
				$baris = $_POST['baris'];
				for ($i = 0; $i < $baris; $i++){
					echo "<tr>";
					for ($j = 0; $j < $kolom; $j++){
						echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
					};
					echo "</tr>";
				};
			?>
			</table>
	</body>
</html>