<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Studi Kasus 1 - Preselecting Seleksi</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
Menu hari ini:
	<select name="menu">
		<option value="Es Siwalan" />Es Siwalan
		<option value="Es Bathil" selected="yes" />Es Bathil
		<option value="Es Buah MIXED" />Es Buah MIXED
		<option value="Es Teh" />Es Teh
	</select>
	<br />
<input type="submit" value="OK" />
</form>

<?php
	if (isset($_POST['menu'])){
		echo $_POST['menu'];
	}
?>
</body>
</html>