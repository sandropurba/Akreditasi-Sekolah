<?php

?>
<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Evaluasi Diri Sekolah</h3>
			</div>
		</div><!--/.row-->

		<?php
		$nim = $_SESSION['nim'];
		$qry = mysql_query("select * from identitas_sekolah where npsn='$nim'");
		$us = mysql_fetch_array($qry);
		$no=0;
		$no++;
		?>
<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table">
						    <thead>
						    <tr>
							    <th>No</th>
									<th>NPSN</th>
									<th>Nama Sekolah</th>
									<th>Jenjang</th>
									<th><center>Aksi</center></th>
						    </tr>
						    </thead>
						    <tbody>
							<tr>
								<td><?php echo "".$no; ?></td>
								<td><?php echo $us['npsn']; ?></td>
								<td><?php echo $us['sekolah']; ?></td>
								<td><?php echo $us['jenjang']; ?></td>
								<td>
									<?php if (isset($_GET['ap']) && $_GET['ap']=="syarat") echo "class='active'";?><a href="?ap=syarat"class="btn btn-info btn-sm" id="btn-todo">Persyaratan Akreditasi</a>
									<?php if (isset($_GET['ap']) && $_GET['ap']=="foto") echo "class='active'";?><a href="?ap=foto"class="btn btn-info btn-sm" id="btn-todo">Foto Pendukung</a>
									<?php if (isset($_GET['ap']) && $_GET['ap']=="soal") echo "class='active'";?><a href="?ap=soal"class="btn btn-info btn-sm" style="background-color:#4CAF50" id="btn-todo">Input Evaluasi Diri</a>
							<?php

							mysql_close();
							?>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
</div>
