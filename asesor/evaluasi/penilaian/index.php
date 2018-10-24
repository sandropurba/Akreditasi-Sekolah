<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Penilaian Sekolah</h3>
			</div>
		</div><!--/.row-->

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
										<th>Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php
						    include "../koneksi.php";
						    $no=0;
							$query = "select * from identitas_sekolah";
							$hasil = mysql_query($query) or die("");
							while ($data = mysql_fetch_array($hasil)) {
								$no++;
							?>
							<tr>
								<td><?php echo "".$no; ?></td>
								<td><?php echo $data['npsn']; ?></td>
								<td><?php echo $data['sekolah']; ?></td>
								<td><?php echo $data['jenjang']; ?></td>
								<td>
									<?php if (isset($_GET['ap']) && $_GET['ap']=="nilai") echo "class='active'";?><a href="?ap=nilai&id=<?php echo ($data['npsn']); ?>"  class="btn btn-info btn-sm" style="background-color:#4CAF50; border-color: #4CAF50;">Beri Penilaian</a>
									<?php if (isset($_GET['ap']) && $_GET['ap']=="f-syarat") echo "class='active'";?><a href="?ap=f-syarat&id=<?php echo ($data['npsn']); ?>" class="btn btn-info btn-sm" style="background-color:orange; border-color:orange;">Foto Syarat</a>
									<?php if (isset($_GET['ap']) && $_GET['ap']=="foto") echo "class='active'";?><a href="?ap=foto&id=<?php echo ($data['npsn']); ?>" class="btn btn-info btn-sm" style="background-color:orange; border-color:orange;">Foto Sekolah</a>
									<?php if (isset($_GET['ap']) && $_GET['ap']=="u-foto") echo "class='active'";?><a href="?ap=u-foto&id=<?php echo ($data['npsn']); ?>" class="btn btn-info btn-sm" id="btn-todo">Upload Foto Pendukung</a>
							<?php
							}
							mysql_close();
							?>
							</tr>
							</tbody>
						</table>
					</div>
					<div class="panel-footer">
						<h3><center>
							<?php if (isset($_GET['ap']) && $_GET['ap']=="hitung") echo "class='active'";?><a href="?ap=hitung"class="btn btn-info btn-sm" style="background-color:#4CAF50; border-color: #4CAF50;" id="btn-todo">Lakukan Perhitungan</a>
						</h3></center>
					</div>
				</div>

			</div>
</div>
