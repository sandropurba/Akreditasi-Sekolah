<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Matriks Ideal Positif/Negatif</h3>
	</div>
		</div><!--/.row-->

		<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<table class="table table-striped table-hover table-responsive">
  <thead>
  <tr>
		<th></th>
  <th colspan="8"><center>Kriteria</center></th>
  </tr>
	  <tr>
			<th>NPSN</th>
		  <?php
			  $hk=mysql_query("select kode from tb_kriteria");
			  while($dhk=mysql_fetch_assoc($hk)){

			  	echo"<th>$dhk[kode]</th>";
			  }
		  ?>
	  </tr>

  </thead>
	  <tbody>
			<?php
				$p=2;
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

				echo "
					<tr>
						<td>".$h1."</td>
						<td>".$m1."</td>
						<td>".$m2."</td>
						<td>".$m3."</td>
						<td>".$m4."</td>
						<td>".$m5."</td>
						<td>".$m6."</td>
						<td>".$m7."</td>
						<td>".$m8."</td>
					</tr>

					";
					}
					?>
	  </tbody>
	<tbody>
		<tr>
			<th>Nilai MAX (A<sup>+</sup>)</th>
			<?php
				$max1=max($ym1);
				$max2=max($ym2);
				$max3=max($ym3);
				$max4=max($ym4);
				$max5=max($ym5);
				$max6=max($ym6);
				$max7=max($ym7);
				$max8=max($ym8);
			echo "
					<th>".$max1."</th>
					<th>".$max2."</th>
					<th>".$max3."</th>
					<th>".$max4."</th>
					<th>".$max5."</th>
					<th>".$max6."</th>
					<th>".$max7."</th>
					<th>".$max8."</th>
			"
			 ?>
			</tr>
			<tr>
				<th>Nilai MIN (A<sup>-</sup>)</th>
				<?php
				$min1=min($ym1);
				$min2=min($ym2);
				$min3=min($ym3);
				$min4=min($ym4);
				$min5=min($ym5);
				$min6=min($ym6);
				$min7=min($ym7);
				$min8=min($ym8);
				echo "
						<th>".$min1."</th>
						<th>".$min2."</th>
						<th>".$min3."</th>
						<th>".$min4."</th>
						<th>".$min5."</th>
						<th>".$min6."</th>
						<th>".$min7."</th>
						<th>".$min8."</th>
				"
				 ?>
				</tr>
	</tbody>
  </table>
</div>
</div>
</div>
</div>
