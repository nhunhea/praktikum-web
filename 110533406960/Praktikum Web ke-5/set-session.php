<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Set Session</title>
</head>

<body>
<?php
session_start();

if(!isset($_SESSION['test'])) {
        $_SESSION['test'] = 'value';
        }else{
        echo 'Session diset <br/>';
        echo 'Nilai : ' . $_SESSION['test'] . '<br/>';
        print_r ($_SESSION);
        }
?>
<p>
Tekan Refresh (F5);
</body>
</html>