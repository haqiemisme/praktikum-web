<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Akses dan Manipulasi Data</title>
<style type="text/css">
.even {
background: #ddd;
}
</style>
</head>
<body>
<?php
ini_set('display_errors',1);
// Meng-include file koneksi dan data handler
require_once './koneksi.php';
require_once './handler.php';
// Konstanta nama tabel
define('MHS', 'mahasiswa');
// Memanggil fungsi data handler
handler('?m=data');
?>
<form action = "<?php $_SERVER['PHP_SELF'];?>" method = "post">
</br>
<input type ="submit" name = "logout" value = "LOGOUT">
</form>


<?php
if (isset($_POST["logout"])){
?><script language = "JavaScript">
alert("???")
document.location='login.php'</script><?php
}?>
</body>
</html>