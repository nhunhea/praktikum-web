<?php
//mengambil masukan user
$input1 = $_POST['input1'];
$input2 = $_POST['input2'];
$operator = $_POST['operatorbantu'];
//operasi
if ($operator == '+'){
	$hasil = $input1+$input2;
}
if ($operator == '-'){
	$hasil = $input1-$input2;
}
if ($operator == '*'){
	$hasil = $input1*$input2;
}
if ($operator == '/'){
	$hasil = $input1/$input2;
}
//mengirimkan hasil
header ("location:index.php?hasil1=$hasil");
?>