<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Seleksi</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
Pekerjaan
	<select name="job">
	<option value="Mahasiswa" />Mahasiswa
	<option value="ABRI" />ABRI
	<option value="PNS" />PNS
	<option value="Swasta" />Swasta
	</select>
	<br />
<input type="submit" value="OK" />
</form>

<?php
	if (isset($_POST['job'])){
		echo $_POST['job'];
	}
?>
</body>
</html>