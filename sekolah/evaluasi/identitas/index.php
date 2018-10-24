<?php

?>
<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Identitas Sekolah</h3>
			</div>
		</div><!--/.row-->
		<?php
			$nim = $_SESSION['nim'];
			$qry = mysql_query("select * from identitas_sekolah where npsn='$nim'");
			$us = mysql_fetch_array($qry);
    ?>
<div class=" panel panel-default">
	<div class="panel-body">
		<form role="form" action="evaluasi/identitas/simpan.php" method="post">
			<div class="form-group row">
					  <div class="col-xs-5">
						<label for="ex1">Nama Sekolah</label>
						<input type="text" class="form-control" name="sekolah" value="<?php echo $us['sekolah'];?>" style="border-color: #363736;" />
					  </div>
						<div class="col-xs-5">
						<label for="ex2">NPSN</label>
						<input type="text" class="form-control" name="npsn" value="<?php echo $us['npsn'];?>" style="border-color: #363736;" id="exampleInputEmail1" disabled	>
					  </div>
					  <div class="col-xs-5">
						<label for="ex2">Jenjang</label>
						<input type="text" class="form-control" name="jenjang" value="<?php echo $us['jenjang'];?>" style="border-color: #363736;"  id="exampleInputEmail1">
					  </div>
					  <div class="col-xs-5">
						<label for="ex2">Tipe Sekolah</label>
						<input type="text" class="form-control" name="tipe" value="<?php echo $us['tipe'];?>" style="border-color: #363736;"  id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Status Sekolah</label>
						<input type="text" class="form-control" name="status" value="<?php echo $us['status'];?>" style="border-color: #363736;"  id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Provinsi</label>
						<input type="text" class="form-control" name="provinsi" value="<?php echo $us['provinsi'];?>" style="border-color: #363736;"  id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Alamat</label>
						<input type="text" class="form-control" name="alamat" value="<?php echo $us['alamat'];?>" style="border-color: #363736;"  id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Kecamatan</label>
						<input type="text" class="form-control" name="kecamatan" value="<?php echo $us['kecamatan'];?>" style="border-color: #363736;"  id="exampleInputEmail1">
					  </div>
						<div class="col-xs-5">
						<label for="ex2">No. Telepon</label>
						<input type="text" class="form-control" name="telepon" value="<?php echo $us['telepon'];?>" style="border-color: #363736;"  id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Email</label>
						<input type="text" class="form-control" name="email" value="<?php echo $us['email'];?>" style="border-color: #363736;"  id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Status Akreditasi Terakhir </label>
						<input type="text" class="form-control" name="akreditasi" value="<?php echo $us['akreditasi'];?>" style="border-color: #363736;"  id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Tahun Berdiri Sekolah</label>
						<input type="text" class="form-control" name="tahun" value="<?php echo $us['tahun'];?>" style="border-color: #363736;"  id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
					  <label for="comment">Visi Sekolah</label>
					  <textarea class="form-control" rows="5" name="visi"  style="border-color: #363736;"  id="exampleInputEmail1"><?php echo $us['visi'];?></textarea>
					</div>
					<div class="col-xs-5">
					  <label for="comment">Misi Sekolah</label>
					  <textarea class="form-control" rows="5" name="misi"  style="border-color: #363736;"  id="exampleInputEmail1"><?php echo $us['misi'];?></textarea>
					</div>
			</div>
			<input type="submit" class="btn btn-success" value="Simpan">
	</div>
</div>
<?php

?>
