<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Nilai Matriks Ternormalisasi</h3>
	</div>
		</div><!--/.row-->
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
											$sqlval = mysql_query("select npsn, pow(c1,2) as c1, pow(c2,2) as c2, pow(c3,2) as c3, pow(c4,2) as c4, pow(c5,2) as c5, pow(c6,2) as c6, pow(c7,2) as c7, pow(c8,2) as c8 from nilai_akhir_asesor");
											$npsn = '';
											$c1 = $c2 = $c3 = $c4 = $c5 = $c6 = $c7 = $c8 = 0;
											while ($row = mysql_fetch_array($sqlval)){
												$c1 += $row[1];
												$c2 += $row[2];
												$c3 += $row[3];
												$c4 += $row[4];
												$c5 += $row[5];
												$c6 += $row[6];
												$c7 += $row[7];
												$c8 += $row[8];
											}
										?>


                    <?php
											$p=2;
                      $sql = mysql_query("select * from nilai_akhir_asesor");
                      while ($row = mysql_fetch_assoc($sql)){

                      echo "
                      	<tr>
                          <td>".$row['npsn']."</td>
                          <td>".round($row['c1'] / sqrt($c1),5)."</td>
                          <td>".round($row['c2'] / sqrt($c2),5)."</td>
                          <td>".round($row['c3'] / sqrt($c3),5)."</td>
                          <td>".round($row['c4'] / sqrt($c4),5)."</td>
                          <td>".round($row['c5'] / sqrt($c5),5)."</td>
                          <td>".round($row['c6'] / sqrt($c6),5)."</td>
                          <td>".round($row['c7'] / sqrt($c7),5)."</td>
                          <td>".round($row['c8'] / sqrt($c8),5)."</td>

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
