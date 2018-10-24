<div class="row">
		</div><!--/.row-->
<?php
$nim = $_SESSION['nim'];
$qry = mysql_query("select * from hasil_nilai where npsn='$nim'");
$us = mysql_fetch_array($qry);
?>
<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-striped table-hover">
						    <thead>
						    <tr>
                <th>No</th>
						    <th>Komponen Standar</th>
								<th>Nilai Sementara</th>
						    </tr>
						    </thead>
						    <tbody>
							<tr>
								<td>1</td>
                <td>STANDAR ISI</td>
                <td><?php echo $us['komp_isi']; ?></td>
							</tr>
              <tr>
                <td>2</td>
								<td>STANDAR PROSES</td>
                <td><?php echo $us['komp_proses']; ?></td>
							</tr>
              <tr>
                <td>3</td>
								<td>STANDAR KOMPETENSI LULUSAN</td>
                <td><?php echo $us['komp_lulusan']; ?></td>
							</tr>
              <tr>
                <td>4</td>
								<td>STANDAR PENDIDIK DAN TENAGA KEPENDIDIKAN</td>
                <td><?php echo $us['komp_pendidik']; ?></td>
							</tr>
              <tr>
                <td>5</td>
								<td>STANDAR SARANA DAN PRASARANA</td>
                <td><?php echo $us['komp_sarana']; ?></td>
							</tr>
              <tr>
                <td>6</td>
								<td>STANDAR PENGELOLAAN</td>
                <td><?php echo $us['komp_olah']; ?></td>
							</tr>
              <tr>
                <td>7</td>
								<td>STANDAR PEMBIAYAAN</td>
                <td><?php echo $us['komp_biaya']; ?></td>
							</tr>
              <tr>
                <td>8</td>
								<td>STANDAR PENILAIAN</td>
                <td><?php echo $us['komp_nilai']; ?></td>
							</tr>
							</tbody>
						</table>
						<?php if (isset($_GET['ap']) && $_GET['ap']=="print") echo "class='active'";?><a href="?ap=print"class="btn btn-info btn-sm" id="btn-todo">Download Hasil Sementara</a>
					</div>
				</div>
			</div>
    </div>
