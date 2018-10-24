<?php
	session_start();
	include "../../../koneksi.php";

	//$nim1 = $_SESSION['nim'];

	//VARIABL DATABASE
	$npsn = $_POST['npsn'];
	$s1 = $_POST['s1']; 	$s11 = $_POST['s11'];	$s21 = $_POST['s21']; $s31 = $_POST['s31']; $s41 = $_POST['s41'];
	$s2 = $_POST['s2']; 	$s12 = $_POST['s12'];	$s22 = $_POST['s22']; $s32 = $_POST['s32']; $s42 = $_POST['s42'];
	$s3 = $_POST['s3']; 	$s13 = $_POST['s13'];	$s23 = $_POST['s23']; $s33 = $_POST['s33']; $s43 = $_POST['s43'];
	$s4 = $_POST['s4']; 	$s14 = $_POST['s14'];	$s24 = $_POST['s24']; $s34 = $_POST['s34']; $s44 = $_POST['s44'];
	$s5 = $_POST['s5']; 	$s15 = $_POST['s15'];	$s25 = $_POST['s25']; $s35 = $_POST['s35']; $s45 = $_POST['s45'];
	$s6 = $_POST['s6'];		$s16 = $_POST['s16'];	$s26 = $_POST['s26']; $s36 = $_POST['s36']; $s46 = $_POST['s46'];
	$s7 = $_POST['s7'];		$s17 = $_POST['s17']; $s27 = $_POST['s27']; $s37 = $_POST['s37']; $s47 = $_POST['s47'];
	$s8 = $_POST['s8'];		$s18 = $_POST['s18']; $s28 = $_POST['s28']; $s38 = $_POST['s38']; $s48 = $_POST['s48'];
	$s9 = $_POST['s9'];		$s19 = $_POST['s19'];	$s29 = $_POST['s29']; $s39 = $_POST['s39']; $s49 = $_POST['s49'];
	$s10 = $_POST['s10'];	$s20 = $_POST['s20'];	$s30 = $_POST['s30']; $s40 = $_POST['s40']; $s50 = $_POST['s50'];

	$s51 = $_POST['s51']; $s61 = $_POST['s61'];	$s71 = $_POST['s71']; $s81 = $_POST['s81']; $s91 = $_POST['s91'];
	$s52 = $_POST['s52']; $s62 = $_POST['s62'];	$s72 = $_POST['s72']; $s82 = $_POST['s82']; $s92 = $_POST['s92'];
	$s53 = $_POST['s53']; $s63 = $_POST['s63'];	$s73 = $_POST['s73']; $s83 = $_POST['s83']; $s93 = $_POST['s93'];
	$s54 = $_POST['s54']; $s64 = $_POST['s64'];	$s74 = $_POST['s74']; $s84 = $_POST['s84']; $s94 = $_POST['s94'];
	$s55 = $_POST['s55']; $s65 = $_POST['s65'];	$s75 = $_POST['s75']; $s85 = $_POST['s85']; $s95 = $_POST['s95'];
	$s56 = $_POST['s56'];	$s66 = $_POST['s66'];	$s76 = $_POST['s76']; $s86 = $_POST['s86']; $s96 = $_POST['s96'];
	$s57 = $_POST['s57'];	$s67 = $_POST['s67']; $s77 = $_POST['s77']; $s87 = $_POST['s87']; $s97 = $_POST['s97'];
	$s58 = $_POST['s58'];	$s68 = $_POST['s68']; $s78 = $_POST['s78']; $s88 = $_POST['s88']; $s98 = $_POST['s98'];
	$s59 = $_POST['s59'];	$s69 = $_POST['s69'];	$s79 = $_POST['s79']; $s89 = $_POST['s89']; $s99 = $_POST['s99'];
	$s60 = $_POST['s60'];	$s70 = $_POST['s70'];	$s80 = $_POST['s80']; $s90 = $_POST['s90']; $s100 = $_POST['s100'];

	$s101 = $_POST['s101']; 	$s111 = $_POST['s111'];
	$s102 = $_POST['s102']; 	$s112 = $_POST['s112'];
	$s103 = $_POST['s103']; 	$s113 = $_POST['s113'];
	$s104 = $_POST['s104']; 	$s114 = $_POST['s114'];
	$s105 = $_POST['s105']; 	$s115 = $_POST['s115'];
	$s106 = $_POST['s106'];		$s116 = $_POST['s116'];
	$s107 = $_POST['s107'];		$s117 = $_POST['s117'];
	$s108 = $_POST['s108'];		$s118 = $_POST['s118'];
	$s109 = $_POST['s109'];		$s119 = $_POST['s119'];
	$s110 = $_POST['s110'];
//MENCARI SKOR SESUAI BOBOT BUTIR
	$skor_isi 		= (($s1*4)+($s2*4)+($s3*4)+($s4*3)+($s5*4)+($s6*4)+($s7*3)+($s8*4)+($s9*3)+($s10*4));
	$skor_proses 	= (($s11*3)+($s12*4)+($s13*3)+($s14*3)+($s15*3)+($s16*3)+($s17*3)+($s18*3)+($s19*4)+($s20*3)+($s21*3)+($s22*3)+
									($s23*3)+($s24*3)+($s25*4)+($s26*3)+($s27*4)+($s28*3)+($s29*3)+($s30*3)+($s31*3));
	$skor_lulusan	= (($s32*4)+($s33*4)+($s34*4)+($s35*3)+($s36*4)+($s37*3)+($s38*4));
	$skor_pendidik= (($s39*4)+($s40*3)+($s41*4)+($s42*4)+($s43*4)+($s44*4)+($s45*4)+($s46*4)+($s47*3)+($s48*4)+($s49*4)+($s50*3)+($s51*4)+
									($s52*2)+($s53*2)+($s54*2));
	$skor_sarana	= (($s55*3)+($s56*4)+($s57*3)+($s58*4)+($s59*3)+($s60*3)+($s61*2)+($s62*3)+($s63*3)+($s64*3)+($s65*3)+($s66*3)+($s67*3)+
									($s68*3)+($s69*2)+($s70*4)+($s71*2)+($s72*3)+($s73*3)+($s74*2)+($s75*1));
	$skor_olah		= (($s76*4)+($s77*4)+($s78*4)+($s79*2)+($s80*3)+($s81*4)+($s82*3)+($s83*3)+($s84*3)+($s85*3)+($s86*4)+($s87*4)+($s88*4)+
									($s89*4)+($s90*3));
	$skor_biaya		= (($s91*3)+($s92*3)+($s93*2)+($s94*3)+($s95*3)+($s96*2)+($s97*3)+($s98*3)+($s99*3)+($s100*2)+($s101*2)+($s102*3)+
									($s103*2)+($s104*3)+($s105*3)+($s106*4));
	$skor_nilai		= (($s107*4)+($s108*4)+($s109*4)+($s110*4)+($s111*4)+($s112*4)+($s113*4)+($s114*3)+($s115*3)+($s116*3)+($s117*3)+($s118*3)+
									($s119*3));
//MENCARI NILAI KOMPONEN
	$komp_isi			= ($skor_isi/148*14);
	$komp_proses	= ($skor_proses/268*14);
	$komp_lulusan	= ($skor_lulusan/104*14);
	$komp_pendidik= ($skor_pendidik/220*16);
	$komp_sarana	= ($skor_sarana/240*12);
	$komp_olah		= ($skor_olah/208*10);
	$komp_biaya		= ($skor_biaya/176*10);
	$komp_nilai		= ($skor_nilai/184*10);

	$cek = mysql_query("select * from hasil_nilai");
	$num = mysql_num_rows($cek);
	$query=mysql_query("insert into hasil_nilai values('$npsn','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$s12','$s13','$s14','$s15','$s16',
		'$s17','$s18','$s19','$s20','$s21','$s22','$s23','$s24','$s25','$s26','$s27','$s28','$s29','$s30','$s31','$s32','$s33','$s34','$s35','$s36',
		'$s37','$s38','$s39','$s40','$s41','$s42','$s43','$s44','$s45','$s46','$s47','$s48','$s49','$s50','$s51','$s52','$s53','$s54','$s55','$s56',
		'$s57','$s58','$s59','$s60','$s61','$s62','$s63','$s64','$s65','$s66','$s67','$s68','$s69','$s70','$s71','$s72','$s73','$s74','$s75','$s76',
		'$s77','$s78','$s79','$s80','$s81','$s82','$s83','$s84','$s85','$s86','$s87','$s88','$s89','$s90','$s91','$s92','$s93','$s94','$s95','$s96',
		'$s97','$s98','$s99','$s100','$s101','$s102','$s103','$s104','$s105','$s106','$s107','$s108','$s109','$s110','$s111','$s112','$s113','$s114','$s115','$s116',
		'$s117','$s118','$s119','$skor_isi','$skor_proses','$skor_lulusan','$skor_pendidik','$skor_sarana','$skor_olah','$skor_biaya','$skor_nilai','$komp_isi','$komp_proses','$komp_lulusan','$komp_pendidik','$komp_sarana','$komp_olah','$komp_biaya','$komp_nilai')");

	if($query){
			$query1=mysql_query("insert into nilai_akhir_asesor values('$npsn','$komp_isi','$komp_proses','$komp_lulusan','$komp_pendidik','$komp_sarana','$komp_olah','$komp_biaya','$komp_nilai')");
		}
	if ($query) {
		echo "<script>alert('Data berhasil tersimpan');window.location=history.go(-1) </script> ";
	}else {
		echo "<script>alert('Data gagal disimpan');window.location=history.go(-1) </script>";
	}
?>
