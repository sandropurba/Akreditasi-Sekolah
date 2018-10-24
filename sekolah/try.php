<?php 
$sql_login  = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username' AND password = '$password'");
 ?>
