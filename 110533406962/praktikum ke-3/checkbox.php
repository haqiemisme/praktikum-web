<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Checkbox</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
Jenis Kelamin
	<input type="checkbox" name="hobby[]" value="Touring" />Touring
	<input type="checkbox" name="hobby[]" value="Fotografi" />Fotografi
	<input type="checkbox" name="hobby[]" value="Genjrengan" />Genjrengan
	<br />
<input type="submit" value="OK" />
</form>

<?php
	if (isset($_POST['hobby'])){
		foreach($_POST['hobby'] as $key => $val){
		echo $key . ' -> ' . $val . '<br />';
		}
	}
?>
</body>
</html>