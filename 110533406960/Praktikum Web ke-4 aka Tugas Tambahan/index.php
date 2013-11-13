<body style=" font-family: Arial, sans-serif; font-size:18px">
<?php$hasil1= 0;?>
	<center>
		<form name="form1" method="post" action="hitung.php" style="width: 250">
			<div style="margin:5px">Operasi Hitung Matematika</div>
			<div  style="margin:5px">
			<div style="width:75px;">Input Angka ke 1</div>
			<input name="input1" type="text" id="input1" maxlength="12">
			<div style="width:70px; float:left">Input Anhka ke 2</div>
			<input name="input2" type="text" id="input2" maxlength="12">
			</div>
			<div style="margin:5px">
				<div>&nbsp;</div>
				<div style="float:left">
					<select name="operatorbantu" id="operatorbantu">
						<option>+</option>
						<option>-</option>
						<option>*</option>
						<option>/</option>
					</select>
				</div>
				<input type="submit" name="submit" value="HITUNG"/>
			</div>
			<div align="left" style="margin:5px">
			<div style="width:75px">Hasil:</div>
			<input name="hasil1" type="text" readonly="true" value="<?php if (isset($_GET['hasil1'])) echo $_GET['hasil1']?>"/>
			</div>
		</form>
	</center>
</body>