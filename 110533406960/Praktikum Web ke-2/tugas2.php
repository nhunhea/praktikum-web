<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Tugas 2</title>
</head>
<body>
	<form name="tabel" method="post" action="#">
		<table>
			<tr>
			<td><b>Kolom : </b></td>
			</tr>
			<tr>
			<td><input type="text" name="kolom"></td>
			</tr>
			</br>
			<tr>
			<td><b>Sel : </b></td>
			</tr>
			<tr>
			<td><input type="text" name="sel"></td>
			</tr>
			</br>
			<tr>
			<td><input type="submit" name="submit" value="Cetak Sel!"></td>
			</tr>
		</table>
	</form></br></br>
	<table border="1">
		<?php
			$kolom = $_POST['kolom'];
			$sel = $_POST['sel'];
			$baris = (int)($sel/$kolom); $sisa=$sel%$kolom;
			$cell = 1;
			for($i = 0; $i < $baris; $i++){
				echo "<tr>";
				for ($n = 0; $n < $kolom; $n++){
					echo "<td style=\"text-align: center; width: 50px;\">$cell</td>";
					$cell++;
				};
				echo "</tr>";
			};
			if ($sisa!=0){
				echo "<tr>";
				for ($n = 0; $n < $sisa; $n++){
					echo "<td style=\"text-align: center; width: 50px;\">$cell</td>";
					$cell++;
				};
				echo "</tr>";
			};
		?>
	</table>
</body>
</html>