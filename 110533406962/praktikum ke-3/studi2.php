<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Studi Kasus 2 - Preselecting checkbox</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
Merk HP: <br />
	<input type="checkbox" name="merk[]" value="Nokia" checked="yes" />Nokia <br />
	<input type="checkbox" name="merk[]" value="Sony" />Sony <br />
	<input type="checkbox" name="merk[]" value="Samsung" />Samsung <br />
	<input type="checkbox" name="merk[]" value="LG" />LG <br />
	<input type="checkbox" name="merk[]" value="Motorola" />Motorola <br />
	<input type="checkbox" name="merk[]" value="Lenovo" />Lenovo <br />
	<input type="checkbox" name="merk[]" value="O2" />O2 <br />
	<input type="checkbox" name="merk[]" value="Apple" checked="yes" />Apple
	<br />
<input type="submit" value="OK" />
</form>

<?php
	if (isset($_POST['merk'])){
		foreach($_POST['merk'] as $key => $val){
		echo $key . ' -> ' . $val . '<br />';
		}
	}
?>
</body>
</html>