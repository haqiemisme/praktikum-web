<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Metode Get</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama <input type="text" name="haqiem" />
<input type="submit" value="OK" />
</form>

<?php
	if(isset($_GET['haqiem'])){
		echo 'Halo, ' .$_GET['haqiem'];
	}
?>
</body>
</html>
