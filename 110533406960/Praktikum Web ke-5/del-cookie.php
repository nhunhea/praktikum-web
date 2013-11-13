<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hapus Cookie</title>
</head>

<body>
<?php
setcookie('nama_cookie', 'value');
if(isset($_COOKIE['nama_cookie'])) {
        echo 'cookie di-set <br/>';
        
        setcookie ('nama_cookie', '', time() - 1 * 3600);
        echo 'cookie dihapus';
        }else {
        echo 'unset';
        }
        
?>
<p>
Tekan Refresh;
</body>
</html>