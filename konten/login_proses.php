<?php
	session_start();
	include "../koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$jenis = $_POST['jenis'];

	if($jenis=="sekolah"){
		$query = mysql_query("select * from identitas_sekolah where npsn='$username' and password='$password' and jenis='$jenis'");
		$cek=mysql_num_rows($query);

		if($cek > 0){
			$_SESSION['nim'] = $username;
			$_SESSION['status'] = "login";
			?><script language="JavaScript">alert('Login Berhasil  !');
			document.location='../sekolah/index.php'</script><?php
		}else {
			echo mysql_error();
			?><script language="JavaScript">alert('Login Gagal  !');
			document.location='../index.php?ap=login'</script><?php
		}
	}

	if($jenis=="asesor"){
		$query = mysql_query("select * from identitas_asesor where nip='$username' and password='$password' and jenis='$jenis'");
		$cek=mysql_num_rows($query);

		if($cek > 0){
			$_SESSION['nim'] = $username;
			$_SESSION['status'] = "login";
			?><script language="JavaScript"> document.location='../asesor/index.php'</script><?php
		}else {
			echo mysql_error();
			?><script language="JavaScript">alert('Username atau Password Salah!');
			document.location='../index.php?ap=login'</script><?php
		}
	}
?>
