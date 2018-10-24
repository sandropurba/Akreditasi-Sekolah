<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Nilai Bobot Ternormalisasi</h3>
	</div>
		</div><!--/.row-->

    <?php
    $us = 0;
    $qrykr = mysql_query("select * from kr");
    $us = mysql_fetch_array($qrykr);
     ?>
<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-striped table-hover table-responsive">
						    <thead>
							    <tr>
		                <th>NPSN</th>
								    <th>C1</th>
										<th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C6</th>
                    <th>C7</th>
                    <th>C8</th>
							    </tr>
						    </thead>
						    <tbody>
									<tbody>
                    <?php
											$p=2;
                      $sql = mysql_query("select * from nilai_akhir_asesor");
                      while ($row = mysql_fetch_assoc($sql)){
													$h1=$row['npsn'];
													$h2=round($row['c1'] / sqrt($c1) * $us[0], 5);
													$h3=round($row['c2'] / sqrt($c2) * $us[1], 5);
													$h4=round($row['c3'] / sqrt($c3) * $us[2], 5);
													$h5=round($row['c4'] / sqrt($c4) * $us[3], 5);
													$h6=round($row['c5'] / sqrt($c5) * $us[4], 5);
													$h7=round($row['c6'] / sqrt($c6) * $us[5], 5);
													$h8=round($row['c7'] / sqrt($c7) * $us[6], 5);
													$h9=round($row['c8'] / sqrt($c8) * $us[7], 5);
                      echo "
                      	<tr>
                          <td>".$h1."</td>
                          <td>".$h2."</td>
                          <td>".$h3."</td>
                          <td>".$h4."</td>
                          <td>".$h5."</td>
                          <td>".$h6."</td>
                          <td>".$h7."</td>
                          <td>".$h8."</td>
                          <td>".$h9."</td>
                        </tr>

                        ";
                        }
                    ?>
              	</tbody>
						</table>
					</div>
				</div>
			</div>
    </div>
