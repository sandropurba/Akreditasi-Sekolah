<?php
	session_start();
	include "../../../koneksi.php";

	$nim = $_SESSION['nim'];
	$nama = $_POST['nama'];
	$nip = $_POST['nip'];
	$pangkat = $_POST['pangkat'];
	$golongan = $_POST['golongan'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jabatan = $_POST['jabatan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$telepon = $_POST['telepon'];
	$email = $_POST['email'];
	$no_sertifikat = $_POST['no_sertifikat'];
	$password = $_POST['password'];

	$cek = mysql_query("select * from identitas_asesor where nip='$nip'");
		$num = mysql_num_rows($cek);
		if ($num > 0 ){
			$query = mysql_query("update identitas_asesor set nama='$nama', pangkat='$pangkat', golongan='$golongan', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jabatan='$jabatan', jenis_kelamin='$jenis_kelamin', telepon='$telepon', email='$email', no_sertifikat='$no_sertifikat', password='$password' where nip='$nip'");
		}else{
		 	$query = mysql_query("insert into identitas_asesor values('$sekolah','$pangkat','$golongan','$tempat_lahir','$tanggal_lahir','$jabatan','$jenis_kelamin','$telepon','$email','$no_sertifikat','$password')");
		}

		if ($query) {
			echo "<script>alert('Data berhasil tersimpan');document.location='../../index.php' </script> ";
		}else {
		echo "<script>alert('Data gagal disimpan');document.location='../../index.php' </script> ";
		}
?>
