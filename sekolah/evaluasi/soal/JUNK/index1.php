
<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Identitas Sekolah</h3>
			</div>
		</div><!--/.row-->
<div class="panel panel-default">
	<div class="panel-bodyy">
		<form role="form" action="evaluasi/identitas/simpan.php" method="post">
			<div class="form-group row">
					  <div class="col-xs-5">
						<label for="ex1">Nama Sekolah</label>
						<input type="text" class="form-control" name="sekolah" id="exampleInputEmail1" value="<?php echo $_SESSION['username'];?>" />
					  </div>
						<div class="col-xs-5">
						<label for="ex2">NPSN</label>
						<input type="text" class="form-control" name="npsn" id="exampleInputEmail1">
					  </div>
					  <div class="col-xs-5">
						<label for="ex2">Jenjang</label>
						<input type="text" class="form-control" name="jenajng" id="exampleInputEmail1">
					  </div>
					  <div class="col-xs-5">
						<label for="ex2">Tipe Sekolah</label>
						<input type="text" class="form-control" name="tipe" id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Status Sekolah</label>
						<input type="text" class="form-control" name="status" id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Provinsi</label>
						<input type="text" class="form-control" name="provinsi" id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Alamat</label>
						<input type="text" class="form-control" name="alamat" id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Kecamatan</label>
						<input type="text" class="form-control" name="kecamatan" id="exampleInputEmail1">
					  </div>
						<div class="col-xs-5">
						<label for="ex2">No. Telepon</label>
						<input type="text" class="form-control" name="telepon" id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Email</label>
						<input type="text" class="form-control" name="email" id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Status Akreditasi Terakhir </label>
						<input type="text" class="form-control" name="akreditasi" id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
						<label for="ex2">Tahun Berdiri Sekolah</label>
						<input type="text" class="form-control" name="tahun" id="exampleInputEmail1">
					  </div>
					   <div class="col-xs-5">
					  <label for="comment">Visi Sekolah</label>
					  <textarea class="form-control" rows="5" name="visi" id="exampleInputEmail1"></textarea>
					</div>
					<div class="col-xs-5">
					  <label for="comment">Misi Sekolah</label>
					  <textarea class="form-control" rows="5" name="misi" id="exampleInputEmail1"></textarea>
					</div>
			</div>
	<input type="submit" class="btn btn-success" value="Simpan">
	</div>
</div>
