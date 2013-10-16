<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Tugas Kalkulator</title>
	<style type = "text/css">
	<!--
 
	.kotak{
	width : 380px;
	height : 150px;
	}
	-->
	</style>
</head>

<body>
<div class = "kotak">
<h1 align="center">Monggo</h1>
<form action = "<?php $_SERVER['PHP_SELF'];?>" method = "get">

	<input type = 'number' name = 'a' placeholder="insert number" value = "<?php echo isset ($_GET['a']) ? $_GET['a'] : ''; ?>">

	<select name = "operator">
	<option value = "+" <?php 
	if (@$_GET['operator'] == '+') {
	echo 'selected = "selected"';
	}
	?>> +
	<option value = "-" <?php 
	if (@$_GET['operator'] == '-') {
	echo 'selected = "selected"';
	}
	?>> -
	<option value = "/"
	<?php 
	if (@$_GET['operator'] == '/') {
	echo 'selected = "selected"';
	}
	?>> /
	<option value = "*"
	<?php 
	if (@$_GET['operator'] == '*') {
	echo 'selected = "selected"';
	}
	?>> *
	</select>
	<br/>
	<input type = 'number' name = 'b' placeholder="insert number" value = "<?php echo isset ($_GET['b']) ? $_GET['b'] : ''; ?>" ><br/>
	<input type = "submit" value = "="/>

</form>

<form>
<?php 
$a = $_GET['a'];
$b = $_GET['b'];
?>
<?php

if (isset ($_GET['operator'])) {
	if (@$_GET['operator'] == '+') {
	$c = $a + $b;
	}
	elseif (@$_GET['operator'] == '-') {
	$c = $a - $b;
	}
	elseif (@$_GET['operator'] == '/') {
	$c = $a / $b;
	}
	elseif (@$_GET['operator'] == '*') {
	$c = $a * $b;
	}
	}?>

	<input type = 'text' name = 'b' placeholder="result" value = '<?php echo $c;?>'>

<?php	
if (isset($_GET["a"]) && isset($_GET["b"]) && ($_GET["a"] =="") && ($_GET["b"] == "")){
?><script language = "JavaScript">
alert("masukkan angka!!")
document.location='web_aritmatika.php'</script><?php
} ?>

</form>

</div>
</body>
</html>