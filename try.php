<?php
  require_once 'koneksi.php';
if (isset($_GET["proses"])) {
  $kode   = $_GET["kode"];
  $kriteria   = $_GET["kriteria"];
  $bobot   = $_GET["bobot"];
  mysql_query("insert into tbl_soal values" . "('$kode'),('$kriteria'),('$bobot')") or die (mysql_error());
}
?>

<h1>Form kriteria</h1><hr>
<form class="" action="index.html" method="get">

kode  <input type="text" name="kode" value=""><br>
kriteria  <input type="text" name="kriteria" value=""><br>
bobot  <input type="text" name="bobot" value=""><br>
<input type="submit" name="proses" value="Simpan">
</form><br>
<table width="200px" border="1">
  <tr>
    <th>kode</th>
    <th>kriteria</th>
    <th>Bobot</th>
    <th>Proses</th>
  </tr>
  <?php
    mysql_query("SELECT * FROM tbl_soal");
    while ($r = mysql_fetch_array($sql)) {

  echo  "<tr>
          <td>$r[0]</td>
          <td>$r[1]</td>
          <td>$r[2]</td>
          <td><a href='#'>Hapus</a></td>
        </tr>";
}
?>
</table>
