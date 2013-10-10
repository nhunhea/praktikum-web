<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas Praktikum : Login Form</title>
	<link rel="stylesheet" type="text/css" href="tp.css" />
</head>

<body>
<script language="javascript" type="text/javascript">
<!--
var text_init = "";

function get_Nilai(){
	var myForm = document.myForm;
	var uName = myForm.user.value;
	var pass = myForm.pass.value;

	if (user == '') {alert ('Isikan Username. Username tidak boleh kosong.'); myForm.user.focus(); }
	else if (pass == '') {alert ('Isikan Password. Password tidak boleh kosong.');  myForm.pass.focus(); }
	else myForm.submit();
}

function text_store(){
	text_init = document.myForm.user.value;
}

function text_input(){
	var inputtex_value = document.myForm.user.value;
	var filter = /^[a-zA-Z]+$/ ;
	if(!filter.test(inputtex_value))		{
		document.myForm.user.value = text_init;
	}
}

//-->
</script>
<div class="formContainer" style="margin-top:150px; margin-right:auto; margin-left:auto;">
	<div class="formHeader" style="padding-top:25px; height:50px; font-size:34px; font-weight:bold; color: #f07800; margin-left:auto; font-family:Times New Roman;"><center>Demo Login </center></div>
		<div id="form" style="margin:35px 5px 5px 40px; ">
		<?php
		$u_Name="admin";
		$u_Pass="aaa";
		$isTryLogin=0;
		if(isset($_POST['user']) and ($_POST['pass'])){
			if(($_POST['user']==$u_Name) and ($_POST['pass']==$u_Pass)){
				echo "Login telah Berhasil<br>
				  Username dan Password Anda benar<br><br>
				  <strong>Username: </strong>admin<br> 
				  <strong>Password: </strong>aaa";
				$_SESSION['uState']=1;
				$isTryLogin=1;
			}else{
				echo '<span style="color:red;">Username atau Password yang Anda masukkan salah!!</span><br>';
				$_SESSION['uState']=0;
			}
		}

		if($_SESSION['uState']==0){?>
			<form id="myForm" name="myForm" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<div class="Form_b">
					<label for="user">Username</label>
					<input type="text" name="user" id="user" onfocus="text_store();" onchange="text_input();" />
				</div>
				<div class="Form_b" style="margin-top:15px;">
					<label for="pass">Password</label>
					<input type="password" name="pass" id="pass" />
				</div>
				<div class="Form_b" style="margin-top:7px;">
					<input type="button" name="btOk" id="btOk" onclick="get_Nilai();" value="Login" style="float:right;margin-right:40px;font-weight:bold;color:#283C55;width:55px;height:30px;" />
				</div>
			</form>
			<script type="text/javascript">
				document.myForm.user.focus();
			</script>
			<?php
		}elseif($isTryLogin==0){
			echo "Login telah Berhasil<br>
				  Username dan Password Anda benar<br><br>
				  <strong>Username: </strong>admin<br> 
				  <strong>Password: </strong>aaa";
			}
?>
</div>
</div>
<div id ="bawah">
<center>Username  : <i>admin</i><br />
Password: <i>aaa</i><br /><br />
</div>
</body>
</html>
