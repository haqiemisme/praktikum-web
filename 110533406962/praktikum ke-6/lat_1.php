<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LATIHAN 1 MODUL 5 LANJUT</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> 
  Nama <input type="text" name="nama" size=40 /> 
  <input type="submit" value="CARI" /> 
</form> 
 
<?php 
if (isset($_GET['nama'])) { 
  require_once './koneksi.php'; 
 
  // Kata kunci pencarian 
  $key = $_GET['nama']; 
 
  // Variabel $sql berisi pernyataan SQL pencarian 
  $sql = "SELECT * FROM mahasiswa 
          WHERE nama = '$key'"; 
 
  $res = mysql_query($sql); 
 
  if ($res) { 
    $num = mysql_num_rows($res); 
    if ($num) { 
      echo 'Ditemukan ' . $num . ' row(s)'; ?> 
 
      <table border=1 cellspacing=1 cellpadding=5> 
      <tr> 
        <th>#</th> 
        <th width=100>NIM</th> 
        <th width=150>Nama</th> 
        <th>Alamat</th> 
      </tr> 
      <?php 
      $i = 1; 
      while ($row = mysql_fetch_row($res)) { ?> 
        <tr> 
          <td> 
            <?php echo $i;?> 
          </td> 
          <td> 
            <?php echo $row[0];?> 
          </td> 
          <td> 
            <?php echo $row[1];?> 
          </td> 
          <td> 
            <?php echo $row[2];?>
             </td> 
        </tr> 
        <?php 
        $i++; 
      } 
      ?> 
      </table> 
    <?php 
    } else { 
      echo 'Data Tidak Ditemukan'; 
    } 
  } 
 
} else { 
  echo 'Masukkan kata kunci pencarian'; 
} 
 
?> 

</body>
</html>
