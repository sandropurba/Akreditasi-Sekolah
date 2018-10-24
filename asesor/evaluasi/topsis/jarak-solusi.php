<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Jarak Solusi Ideal Positif (D<sup>+</sup>)</h3>
	</div>
		</div><!--/.row-->

		<div class="row">
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table table-striped table-hover table-responsive">
  <thead>
  <tr>
		<th>No</th>
		<th>NPSN</th>
  	<th>D<sup>+</sup></th>
  </tr>
	  </thead>
	  <tbody>
			<?php
				$p=2;
				$n=0;
				$sql = mysql_query("select * from nilai_akhir_asesor");
				while ($row = mysql_fetch_assoc($sql)){
						$h1=$row['npsn'];

						/////BOBOT NORMALISASI///////////
						$h2=round($row['c1'] / sqrt($c1) * $us[0], 5);
						$h3=round($row['c2'] / sqrt($c2) * $us[1], 5);
						$h4=round($row['c3'] / sqrt($c3) * $us[2], 5);
						$h5=round($row['c4'] / sqrt($c4) * $us[3], 5);
						$h6=round($row['c5'] / sqrt($c5) * $us[4], 5);
						$h7=round($row['c6'] / sqrt($c6) * $us[5], 5);
						$h8=round($row['c7'] / sqrt($c7) * $us[6], 5);
						$h9=round($row['c8'] / sqrt($c8) * $us[7], 5);

						//////////MENHITUNG NILAI//////////
						$m1=$h2 * $us[0];
						$m2=$h3 * $us[1];
						$m3=$h4 * $us[2];
						$m4=$h5 * $us[3];
						$m5=$h6 * $us[4];
						$m6=$h7 * $us[5];
						$m7=$h8 * $us[6];
						$m8=$h9 * $us[7];
					////////ARRAY///////////////
						$ym1[] = $m1;
						$ym2[] = $m2;
						$ym3[] = $m3;
						$ym4[] = $m4;
						$ym5[] = $m5;
						$ym6[] = $m6;
						$ym7[] = $m7;
						$ym8[] = $m8;


						foreach ($ym1 as $i => $value) {
							$A = pow($ym1[$i]-$max1,2) + pow($ym2[$i]-$max2,2) + pow($ym3[$i]-$max3,2) + pow($ym4[$i]-$max4,2) +
												pow($ym5[$i]-$max5,2) + pow($ym6[$i]-$max6,2) + pow($ym7[$i]-$max7,2) + pow($ym8[$i]-$max8,2);
						}
				echo "
					<tr>
						<td>".++$n."</td>
						<td>".$h1."</td>
						<td>".round(sqrt($A),5) . "<br>"."</td>

					</tr>

					";
					}
					?>
	<tbody>
  </table>

</div>
</div>
</div>
</div>


<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Jarak Solusi Ideal Negatif (D<sup>-</sup>)</h3>
	</div>
		</div><!--/.row-->

				<div class="row">
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table table-striped table-hover table-responsive">
  <thead>
  <tr>
		<th>No</th>
		<th>NPSN</th>
  	<th>D<sup>+</sup></th>
  </tr>
	  </thead>
	  <tbody>
			<?php
				$p=2;
				$n=0;
				$sql = mysql_query("select * from nilai_akhir_asesor");
				while ($row = mysql_fetch_assoc($sql)){
						$h1=$row['npsn'];

						/////BOBOT NORMALISASI///////////
						$h2=round($row['c1'] / sqrt($c1) * $us[0], 5);
						$h3=round($row['c2'] / sqrt($c2) * $us[1], 5);
						$h4=round($row['c3'] / sqrt($c3) * $us[2], 5);
						$h5=round($row['c4'] / sqrt($c4) * $us[3], 5);
						$h6=round($row['c5'] / sqrt($c5) * $us[4], 5);
						$h7=round($row['c6'] / sqrt($c6) * $us[5], 5);
						$h8=round($row['c7'] / sqrt($c7) * $us[6], 5);
						$h9=round($row['c8'] / sqrt($c8) * $us[7], 5);

						//////////MENHITUNG NILAI//////////
						$m1=$h2 * $us[0];
						$m2=$h3 * $us[1];
						$m3=$h4 * $us[2];
						$m4=$h5 * $us[3];
						$m5=$h6 * $us[4];
						$m6=$h7 * $us[5];
						$m7=$h8 * $us[6];
						$m8=$h9 * $us[7];
					////////ARRAY///////////////
						$ym1[] = $m1;
						$ym2[] = $m2;
						$ym3[] = $m3;
						$ym4[] = $m4;
						$ym5[] = $m5;
						$ym6[] = $m6;
						$ym7[] = $m7;
						$ym8[] = $m8;


						foreach ($ym1 as $i => $value) {
							$B = pow($ym1[$i]-$min1,2) + pow($ym2[$i]-$min2,2) + pow($ym3[$i]-$min3,2) + pow($ym4[$i]-$min4,2) +
												pow($ym5[$i]-$min5,2) + pow($ym6[$i]-$min6,2) + pow($ym7[$i]-$min7,2) + pow($ym8[$i]-$min8,2);
						}
				echo "
					<tr>
						<td>".++$n."</td>
						<td>".$h1."</td>
						<td>".round(sqrt($B),5) . "<br>"."</td>

					</tr>

					";
					}
					?>
	<tbody>
  </table>
</div>
</div>
</div>
</div>
