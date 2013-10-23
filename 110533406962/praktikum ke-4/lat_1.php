<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Set Cookie</title>
</head>

<body>
<?php
//menset nilai cookie
setcookie('kuki', '2');

//mendapat nilai cookie
echo $_COOKIE['kuki'];
?>

<p>Tekan Referesh (F5)</p>
</body>
</html>
