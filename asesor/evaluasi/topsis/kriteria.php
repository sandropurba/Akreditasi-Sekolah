<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Tabel Kriteria</h3>
	</div>
		</div><!--/.row-->
<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-striped table-hover table-responsive">
						    <thead>
							    <tr>
		                <th>Kode</th>
								    <th>Kriteria</th>
										<th>Bobot</th>
							    </tr>
						    </thead>
						    <tbody>
									<tbody>
                    <?php
                      $sql = mysql_query("select * from tb_kriteria");
                      while ($row = mysql_fetch_array($sql)){
                      echo "
                      	<tr>
                          <td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td>
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
