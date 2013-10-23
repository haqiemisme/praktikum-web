<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hapus Cookie</title>
</head>

<body>
<?php 
 
setcookie('nama_cookie', 'nilai_cookie'); 
 
if (isset($_COOKIE['nama_cookie'])) { 
  echo 'cookie di-set <br />';
    // Menghapus cookie, dengan masa berlaku 3 jam yang lalu 
  setcookie('nama_cookie', '', time() - 3 * 3600); 
  echo 'cookie dihapus'; 
 
} else { 
  echo 'unset'; 
} 
 
?> 
 
<p> 
Tekan Refresh (F5);</p>
</body>
</html>
