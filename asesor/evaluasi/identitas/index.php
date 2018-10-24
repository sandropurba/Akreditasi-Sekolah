<?php

?>
<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Identitas Asesor</h3>
			</div>
		</div><!--/.row-->
		<?php
		$nim = $_SESSION['nim'];
		$qry = mysql_query("select * from identitas_asesor where nip='$nim'");
		$us = mysql_fetch_array($qry);
    ?>
<div class="panel panel-default">
	<div class="panel-body">
		<form role="form" action="evaluasi/identitas/simpan.php" method="post">
			<div class="form-group row">
					  <div class="col-xs-6">
						<label for="ex1">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $us['nama'];?>" style="border-color: #363736;"  />
					  </div>
						<div class="col-xs-6">
						<label for="ex2">NIP</label>
						<input type="text" class="form-control" name="nip" value="<?php echo $us['nip'];?>" style="border-color: #363736;" disabled/>
					  </div>
					  <div class="col-xs-6">
						<label for="ex2">Pangkat</label>
						<input type="text" class="form-control" name="pangkat" value="<?php echo $us['pangkat'];?>" style="border-color: #363736;"  />
					  </div>
					  <div class="col-xs-6">
						<label for="ex2">Golongan</label>
						<input type="text" class="form-control" name="golongan" value="<?php echo $us['golongan'];?>" style="border-color: #363736;"  />
					  </div>
					   <div class="col-xs-6">
						<label for="ex2">Tempat Lahir</label>
						<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $us['tempat_lahir'];?>" style="border-color: #363736;"  >
					  </div>
					   <div class="col-xs-6">
						<label for="ex2">Tanggal Lahir</label>
						<input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $us['tanggal_lahir'];?>"  style="border-color: #363736;" />
					  </div>
					   <div class="col-xs-6">
						<label for="ex2">Jabatan</label>
						<input type="text" class="form-control" name="jabatan" value="<?php echo $us['jabatan'];?>" style="border-color: #363736;" />
					  </div>
					   <div class="col-xs-6">
						<label for="ex2">Jenis Kelamin</label>
						<input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $us['jenis_kelamin'];?>" style="border-color: #363736;"/>
					  </div>
						<div class="col-xs-6">
						<label for="ex2">No Telepon</label>
						<input type="text" class="form-control" name="telepon" value="<?php echo $us['telepon'];?>" style="border-color: #363736;" />
					  </div>
					   <div class="col-xs-6">
						<label for="ex2">Email</label>
						<input type="text" class="form-control" name="email" value="<?php echo $us['email'];?>" style="border-color: #363736;" />
					  </div>
					   <div class="col-xs-6">
						<label for="ex2">No. Sertifikat</label>
						<input type="text" class="form-control" name="no_sertifikat" value="<?php echo $us['no_sertifikat'];?>" style="border-color: #363736;"/>
					  </div>
					   <div class="col-xs-6">
						<label for="ex2">Password</label>
						<input type="text" class="form-control" name="password" value="<?php echo $us['password'];?>" style="border-color: #363736;"/>
			</div>

	</div>
	<input type="submit" class="btn btn-success" value="Simpan">
</div>
<?php

?>
