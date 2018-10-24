<?php

	if(isset($_GET['ap'])){
		$ap = $_GET['ap'];


		if ($ap=="penilaian"){
			include "evaluasi/penilaian/index.php";
		}

		if ($ap=="identitas"){
			include "evaluasi/identitas/index.php";
		}

		if ($ap=="nilai"){
			include "evaluasi/soal/index.php";
		}
		if ($ap=="hitung"){
			include "evaluasi/topsis/index.php";
		}
		if ($ap=="u-foto"){
			include "evaluasi/foto/index.php";
		}
		if ($ap=="foto"){
			include "evaluasi/foto/foto-sekolah.php";
		}
		if ($ap=="panduan"){
			include "evaluasi/panduan/index.php";
		}
		if ($ap=="f-syarat"){
			include "evaluasi/foto/foto-syarat.php";
		}
	}else{
		include "home.php";
	}

?>
