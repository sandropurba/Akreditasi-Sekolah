<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Tabel Hasil Penilaian</h3>
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
                      $sql = mysql_query("select * from nilai_akhir_asesor");
                      while ($row = mysql_fetch_array($sql)){
                      echo "
                      	<tr>
                          <td>$row[0]</td>
                          <td>$row[1]</td>
                          <td>$row[2]</td>
                          <td>$row[3]</td>
                          <td>$row[4]</td>
                          <td>$row[5]</td>
                          <td>$row[6]</td>
                          <td>$row[7]</td>
                          <td>$row[8]</td>
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
