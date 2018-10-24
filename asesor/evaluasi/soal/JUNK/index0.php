<?php  ?>
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Evaluasi Diri Sekolah</h3>
			</div>
		</div>

			<?php
				include "../koneksi.php";
				$nim = $_SESSION['nim'];
				$qry = mysql_query("select * from identitas_sekolah where npsn='$nim' and jenis='sekolah'");
				$us = mysql_fetch_array($qry);
			?>

		<?php
		//if (isset($_POST['npsn'])) {
			//$sql = mysql_query("select * from identitas_sekolah where npsn='$npsn'");
			//$row = mysql_fetch_array($sql);
		?>
		<div class="panel panel-default">
			<div class="panel-body">
			<form action="evaluasi/soal/simpan.php" method="post">
				<input type="hidden" value="<?php echo $us['npsn'];?>" name="npsn";
			<?php
				$cek = mysql_query("select * from nilai_sekolah where npsn='$nim'");
				$num = mysql_num_rows($cek);
				$s1 = 4;  $s11 = 4; $s21 = 4; $s31 = 4; $s41 = 4; $s51 = 4;
				$s2 = 4;  $s12 = 4; $s22 = 4; $s32 = 4; $s42 = 4; $s52 = 4;
				$s3 = 4;  $s13 = 4; $s23 = 4; $s33 = 4; $s43 = 4; $s53 = 4;
				$s4 = 4;  $s14 = 4; $s24 = 4; $s34 = 4; $s44 = 4; $s54 = 4;
				$s5 = 4;  $s15 = 4; $s25 = 4; $s35 = 4; $s45 = 4; $s55 = 4;
				$s6 = 4;  $s16 = 4; $s26 = 4; $s36 = 4; $s46 = 4; $s56 = 4;
				$s7 = 4;  $s17 = 4; $s27 = 4; $s37 = 4; $s47 = 4; $s57 = 4;
				$s8 = 4;  $s18 = 4; $s28 = 4; $s38 = 4; $s48 = 4; $s58 = 4;
				$s9 = 4;  $s19 = 4; $s29 = 4; $s39 = 4; $s49 = 4; $s59 = 4;
				$s10 = 4; $s20 = 4; $s30 = 4; $s40 = 4; $s50 = 4; $s60 = 4;

				$s61 = 4;  $s71 = 4; $s81 = 4; $s91 = 4;  $s101 = 4; $s111 = 4;
				$s62 = 4;  $s72 = 4; $s82 = 4; $s92 = 4;  $s102 = 4; $s112 = 4;
				$s63 = 4;  $s73 = 4; $s83 = 4; $s93 = 4;  $s103 = 4; $s113 = 4;
				$s64 = 4;  $s74 = 4; $s84 = 4; $s94 = 4;  $s104 = 4; $s114 = 4;
				$s65 = 4;  $s75 = 4; $s85 = 4; $s95 = 4;  $s105 = 4; $s115 = 4;
				$s66 = 4;  $s76 = 4; $s86 = 4; $s96 = 4;  $s106 = 4; $s116 = 4;
				$s67 = 4;  $s77 = 4; $s87 = 4; $s97 = 4;  $s107 = 4; $s117 = 4;
				$s68 = 4;  $s78 = 4; $s88 = 4; $s98 = 4;  $s108 = 4; $s118 = 4;
				$s69 = 4;  $s79 = 4; $s89 = 4; $s99 = 4;  $s109 = 4; $s119 = 4;
				$s70 = 4;  $s80 = 4; $s90 = 4; $s100 = 4; $s110 = 4;

				if ($num > 0 ){
					$row = mysql_fetch_array($cek);
					$s1 = $row['s1']; 		$s11 = $row['s11'];	$s21 = $row['s21']; $s31 = $row['s31']; $s41 = $row['s41'];
					$s2 = $row['s2']; 		$s12 = $row['s12'];	$s22 = $row['s22']; $s32 = $row['s32']; $s42 = $row['s42'];
					$s3 = $row['s3']; 		$s13 = $row['s13'];	$s23 = $row['s23']; $s33 = $row['s33']; $s43 = $row['s43'];
					$s4 = $row['s4']; 		$s14 = $row['s14'];	$s24 = $row['s24']; $s34 = $row['s34']; $s44 = $row['s44'];
					$s5 = $row['s5']; 		$s15 = $row['s15'];	$s25 = $row['s25']; $s35 = $row['s35']; $s45 = $row['s45'];
					$s6 = $row['s6'];			$s16 = $row['s16'];	$s26 = $row['s26']; $s36 = $row['s36']; $s46 = $row['s46'];
					$s7 = $row['s7'];			$s17 = $row['s17']; $s27 = $row['s27']; $s37 = $row['s37']; $s47 = $row['s47'];
					$s8 = $row['s8'];			$s18 = $row['s18']; $s28 = $row['s28']; $s38 = $row['s38']; $s48 = $row['s48'];
					$s9 = $row['s9'];			$s19 = $row['s19'];	$s29 = $row['s29']; $s39 = $row['s39']; $s49 = $row['s49'];
					$s10 = $row['s10'];		$s20 = $row['s20'];	$s30 = $row['s30']; $s40 = $row['s40']; $s50 = $row['s50'];

					$s51 = $row['s51']; 	$s61 = $row['s61'];	$s71 = $row['s71']; $s81 = $row['s81']; $s91 = $row['s91'];
					$s52 = $row['s52']; 	$s62 = $row['s62'];	$s72 = $row['s72']; $s82 = $row['s82']; $s92 = $row['s92'];
					$s53 = $row['s53']; 	$s63 = $row['s63'];	$s73 = $row['s73']; $s83 = $row['s83']; $s93 = $row['s93'];
					$s54 = $row['s54']; 	$s64 = $row['s64'];	$s74 = $row['s74']; $s84 = $row['s84']; $s94 = $row['s94'];
					$s55 = $row['s55']; 	$s65 = $row['s65'];	$s75 = $row['s75']; $s85 = $row['s85']; $s95 = $row['s95'];
					$s56 = $row['s56'];		$s66 = $row['s66'];	$s76 = $row['s76']; $s86 = $row['s86']; $s96 = $row['s96'];
					$s57 = $row['s57'];		$s67 = $row['s67']; $s77 = $row['s77']; $s87 = $row['s87']; $s97 = $row['s97'];
					$s58 = $row['s58'];		$s68 = $row['s68']; $s78 = $row['s78']; $s88 = $row['s88']; $s98 = $row['s98'];
					$s59 = $row['s59'];		$s69 = $row['s69'];	$s79 = $row['s79']; $s89 = $row['s89']; $s99 = $row['s99'];
					$s60 = $row['s60'];		$s70 = $row['s70'];	$s80 = $row['s80']; $s90 = $row['s90']; $s100 = $row['s100'];

					$s101 = $row['s101']; 	$s111 = $row['s111'];
					$s102 = $row['s102']; 	$s112 = $row['s112'];
					$s103 = $row['s103']; 	$s113 = $row['s113'];
					$s104 = $row['s104']; 	$s114 = $row['s114'];
					$s105 = $row['s105']; 	$s115 = $row['s115'];
					$s106 = $row['s106'];		$s116 = $row['s116'];
					$s107 = $row['s107'];		$s117 = $row['s117'];
					$s108 = $row['s108'];		$s118 = $row['s118'];
					$s109 = $row['s109'];		$s119 = $row['s119'];
					$s110 = $row['s110'];
				}
			?>

			<?php
			$nim2 = $_SESSION['nim'];
			$qry2 = mysql_query("select * from nilai_sekolah where npsn='$nim2'");
			$us2 = mysql_fetch_array($qry2);
						// if ($us['npsn'] == $us2['npsn'] ){
						//	 	include "nilai.php";
						// }else{
								 include "../komponen/standar_isi.php";
								 include "../komponen/standar_proses.php";
								 include "../komponen/standar_lulusan.php";
								 include "../komponen/standar_pendidik.php";
								 include "../komponen/standar_sarana.php";
								 include "../komponen/standar_pengelolaan.php";
								 include "../komponen/standar_pembiayaan.php";
								 include "../komponen/standar_penilaian.php";
								 echo "<br><input type='submit' name='enter' value='Enter' class='btn btn-success'>";

?>
		</form>
					</div>
				</div>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
