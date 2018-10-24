<?php
	session_start();
	include "../../../koneksi.php";

	$nim1 = $_SESSION['nim'];

	$npsn = $_POST['npsn'];
	$s1 = $_POST['s1']; $s6 = $_POST['s6'];		$s11 = $_POST['s11'];	$s16 = $_POST['s16'];	$s21 = $_POST['s21']; $s26 = $_POST['s26']; $s31 = $_POST['s31'];
	$s2 = $_POST['s2']; $s7 = $_POST['s7'];		$s12 = $_POST['s12'];	$s17 = $_POST['s17'];	$s22 = $_POST['s22']; $s27 = $_POST['s27'];
	$s3 = $_POST['s3']; $s8 = $_POST['s8'];		$s13 = $_POST['s13'];	$s18 = $_POST['s18'];	$s23 = $_POST['s23']; $s28 = $_POST['s28'];
	$s4 = $_POST['s4']; $s9 = $_POST['s9'];		$s14 = $_POST['s14'];	$s19 = $_POST['s19'];	$s24 = $_POST['s24']; $s29 = $_POST['s29'];
	$s5 = $_POST['s5']; $s10 = $_POST['s10'];	$s15 = $_POST['s15'];	$s20 = $_POST['s20'];	$s25 = $_POST['s25']; $s30 = $_POST['s30'];
	//$rata = ($s1 + $s2 + $s3 + $s4 + $s5) / 5;

	$cek = mysql_query("select * from nilai_sekolah");
	//$data = mysql_fetch_array($cek);
	//echo $data['sekolah']
	$num = mysql_num_rows($cek);
	//echo "$nim1, $nim, $num";
	if ($num > 0 ){
		$query = mysql_query("update nilai_sekolah set	s1='$s1', s2='$s2', s3='$s3', s4='$s4', s5='$s5',s6='$s6', s7='$s7', s8='$s8', s9='$s9', s10='$s10',
																										s11='$s11', s12='$s12', s13='$s13', s14='$s14', s15='$s15',s16='$s16', s17='$s17', s18='$s18', s19='$s19', s20='$s20',
																										s21='$s21', s22='$s22', s23='$s23', s24='$s24', s25='$s25',s26='$s26', s27='$s27', s28='$s28', s29='$s29', s30='$s30',
																										s31='$s31'
																										where npsn='$npsn'");
	}else{
		$query = mysql_query("insert into nilai_sekolah 	(`npsn`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`,
																											`s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`,
																											`s21`, `s22`, `s23`, `s24`, `s25`, `s26`, `s27`, `s28`, `s29`, `s30`,
																											's31')
																							values 	('$npsn','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10',
																											'$s11','$s12','$s13','$s14','$s15','$s16','$s17','$s18','$s19','$s20',
																											'$s21','$s22','$s23','$s24','$s25','$s26','$s27','$s28','$s29','$s30','$s31')");
	}

	if ($query) {
		echo "<script>alert('Data berhasil tersimpan');document.location='../../index.php' </script> ";
	}else {
		echo "<script>alert('Data gagal disimpan'); </script> ";
	}
?>



//SIMPAN LAMA
<?php
	session_start();
	include "../../../koneksi.php";

	$nim1 = $_SESSION['nim'];

	$npsn = $_POST['npsn'];
	$s1 = $_POST['s1']; 	$s6 = $_POST['s6'];
	$s2 = $_POST['s2']; 	$s7 = $_POST['s7'];
	$s3 = $_POST['s3']; 	$s8 = $_POST['s8'];
	$s4 = $_POST['s4']; 	$s9 = $_POST['s9'];
	$s5 = $_POST['s5']; 	$s10 = $_POST['s10'];
	//$rata = ($s1 + $s2 + $s3 + $s4 + $s5) / 5;
	//http://localhost/akreditasi2/sekolah/evaluasi/soal/simpan.php?npsn=10203041&s1=5&s2=5&s3=5&s4=5&s5=5&enter=Enter

	$cek = mysql_query("select * from nilai_sekolah");
	//$data = mysql_fetch_array($cek);
	//echo $data['sekolah']
	$num = mysql_num_rows($cek);
	//echo "$nim1, $nim, $num";
	if ($num > 0 ){
		$query = mysql_query("update nilai_sekolah set	s1='$s1', s2='$s2', s3='$s3', s4='$s4', s5='$s5',
																										s6='$s6', s7='$s7', s8='$s8', s9='$s9', s10='$s10' where npsn='$npsn'");
	}else{
		$query = mysql_query("insert into nilai_sekolah  (`npsn`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`)
																							values ('$npsn','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10')");
	}

	if ($query) {
		echo "<script>alert('Data berhasil tersimpan');document.location='../../index.php' </script> ";
	}else {
		echo "<script>alert('Data gagal disimpan'); </script> ";
	}

//CONTOH

$query = mysql_query("INSERT INTO nilai_sekolah (`npsn`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`,
	`s11`, `s12`, `s13`, `s14`, `s15`, `s16`, `s17`, `s18`, `s19`, `s20`,`s21`, `s22`, `s23`, `s24`, `s25`, `s26`, `s27`, `s28`, `s29`, `s30`,'s31')
																					VALUES ('$npsn','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10',
																					'$s11','$s12','$s13','$s14','$s15','$s16','$s17','$s18','$s19','$s20',
																					'$s21','$s22','$s23','$s24','$s25','$s26','$s27','$s28','$s29','$s30','$s31')");


//UPDATE

if ($us['npsn'] == $npsn){
																						$query = mysql_query("UPDATE nilai_sekolah SET	s1='$s1', s2='$s2', s3='$s3', s4='$s4', s5='$s5',s6='$s6', s7='$s7', s8='$s8', s9='$s9', s10='$s10',
																																														s11='$s11', s12='$s12', s13='$s13', s14='$s14', s15='$s15',s16='$s16', s17='$s17', s18='$s18', s19='$s19', s20='$s20',
																																														s21='$s21', s22='$s22', s23='$s23', s24='$s24', s25='$s25',s26='$s26', s27='$s27', s28='$s28', s29='$s29', s30='$s30',
																																														s31='$s31'
																																														WHERE npsn='$npsn'");
																					}else{


?>
//BUTTON

<?php
				$cek = mysql_query("select * from identitas_sekolah");
				$num = mysql_num_rows($cek);
				if ($num > 0 ){
						echo "<br><input type='submit' name='enter' value='Enter' class='btn btn-success' >";
				}else{
						echo "<br><input type='submit' name='enter' value='Enter' class='btn btn-success' disabled>";
				}
?>

//////////////////////////////////////////////////////////////////
													UDAH fIX
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

<?php
$nim2 = $_SESSION['nim'];
$qry2 = mysql_query("select * from nilai_sekolah where npsn='$nim2'");
$us2 = mysql_fetch_array($qry2);
			 if ($us['npsn'] == $us2['npsn'] ){

					 echo "<br><input type='submit' name='enter' value='Enter' class='btn btn-success' disabled>";
			 }else{
					 //echo "ENGGAK BISA";
					 echo "<br><input type='submit' name='enter' value='Enter' class='btn btn-success'>";
			 }
?>

//////////////////////////////////////////////////
Pangkat
//////////////////////////////////////////////////
$pangkat=pow($row['1'], $p);
$jumlah1_ar[] = $pangkat;
$jumlah=array_sum($jumlah1_ar);
$pangkat=sqrt($jumlah);
$nilai=$row[1]/$pangkat;

///////////////////////////////////////

$ymax=array();
/////////////////////////
	$m1=$h2 * $us[0];
	$m2=$h3 * $us[1];
	$m3=$h4 * $us[2];
	$m4=$h5 * $us[3];
	$m5=$h6 * $us[4];
	$m6=$h7 * $us[5];
	$m7=$h8 * $us[6];
	$m8=$h9 * $us[7];

	$ymax[]=$m1;
	//$c<=7;$c++;

echo  "
<tr>
	<td>".max($ymax)."</td>
	<td>".$m2."</td>
	<td>".$m3."</td>
	<td>".$m4."</td>
	<td>".$m5."</td>
	<td>".$m6."</td>
	<td>".$m7."</td>
	<td>".$m8."</td>
</tr>

";


/////////////////////////////HAsil akhir
<?php echo "<code>";
foreach ($ym1 as $i => $value) {
	$A = pow($ym1[$i]-$max1,2) + pow($ym2[$i]-$max2,2) + pow($ym3[$i]-$max3,2) + pow($ym4[$i]-$max4,2) +
						pow($ym5[$i]-$max5,2) + pow($ym6[$i]-$max6,2) + pow($ym7[$i]-$max7,2) + pow($ym8[$i]-$max8,2);
	echo sqrt($A) . "<br>";
} ?>

/////////////////////////////////IPDIP
<?php if (isset($_GET['ap']) && $_GET['ap']=="ipdip") echo "class='active'";?><a href="?ap=ipdip" class="btn btn-info btn-sm" style="background-color:orange; border-color:orange;" id="btn-todo">IPDIP</a>
