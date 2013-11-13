<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cek Cookie</title>
</head>

<body>
<?php
if (isset($_GET['q']) && $_GET['q'] == 1) {
        if (isset($_COOKIE ['test'])) {
                echo 'support';
                }else {
                echo 'tdak support';
                }
                
        } else {
        setcookie ('test', 'value');
        $self = $_SERVER['PHP_SELF'];
        
        header ('location : '.$self. 'q=1');
        exit;
        }
        ?>
<p>
Tekan Refresh;
</body>
</html>