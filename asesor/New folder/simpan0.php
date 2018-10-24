<?php
	session_start();
	include "../../../koneksi.php";

	$sekolah = $_POST['sekolah'];
	$npsn = $_POST['npsn'];
	$jenjang = $_POST['jenjang'];
	$tipe = $_POST['tipe'];
	$status = $_POST['status'];
	$provinsi = $_POST['provinsi'];
	$alamat = $_POST['alamat'];
	$kecamatan = $_POST['kecamatan'];
	$telepon = $_POST['telepon'];
	$email = $_POST['email'];
	$akreditasi = $_POST['akreditasi'];
	$tahun = $_POST['tahun'];
	$visi = $_POST['visi'];
	$misi = $_POST['misi'];


	$sql = mysql_query("insert into identitas_sekolah values('$sekolah','$npsn','$jenjang','$tipe','$status','$provinsi','$alamat','$kecamatan','$telepon','$email','$akreditasi','$tahun','$visi','$misi')");

	if ($sql) {
		echo "<script>alert('Data berhasil tersimpan');document.location='../../index.php' </script> ";
	}else {
		echo "<script>alert('Data gagal disimpan');document.location='../../index.php' </script> ";
	}
?>
