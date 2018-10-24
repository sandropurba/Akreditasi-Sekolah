<?php

	if(isset($_GET['ap'])){
		$ap = $_GET['ap'];


		if ($ap=="evaluasi"){
			include "evaluasi/sekolah/index.php";
		}

		if ($ap=="identitas"){
			include "evaluasi/identitas/index.php";
		}

		if ($ap=="soal"){
			include "evaluasi/soal/index.php";
		}
		if ($ap=="nilai"){
			include "evaluasi/soal/nilai.php";
		}
		if ($ap=="print"){
			include "evaluasi/soal/print.php";
		}
		if ($ap=="panduan"){
			include "evaluasi/panduan/index.php";
		}
		if ($ap=="foto"){
			include "evaluasi/foto/index.php";
		}
		if ($ap=="syarat"){
			include "evaluasi/syarat/index.php";
		}
	}else{
		include "home.php";
	}

?>
