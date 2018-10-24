<?php
	session_start();
	include "../../../koneksi.php";

	$nim = $_SESSION['nim'];
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

	$cek = mysql_query("select * from identitas_sekolah");
		$num = mysql_num_rows($cek);
		if ($num > 0 ){
			$query = mysql_query("update identitas_sekolah set sekolah='$sekolah', jenjang='$jenjang', tipe='$tipe', status='$status', provinsi='$provinsi', alamat='$alamat', kecamatan='$kecamatan', telepon='$telepon', email='$email', akreditasi='$akreditasi', tahun='$tahun', visi='$visi', misi='$misi' where npsn='$npsn'");
		}else{
		 	$query = mysql_query("insert into identitas_sekolah values('$sekolah','$jenjang','$tipe','$status','$provinsi','$alamat','$kecamatan','$telepon','$email','$akreditasi','$tahun','$visi','$misi')");
		}

	if ($query) {
		echo "<script>alert('Data berhasil tersimpan');document.location='../../index.php' </script> ";
	}else {
		echo "<script>alert('Data gagal disimpan');document.location='../../index.php' </script> ";
	}
?>
