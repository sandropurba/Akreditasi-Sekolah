<?php
  $nim = $_SESSION['nim'];
  $qry = mysql_query("select * from identitas_sekolah where npsn='$nim'");
  $us = mysql_fetch_array($qry);
?>
<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Upload Foto Sekolah</h3>
			</div>
		</div>

    <div class="row">
			<div class="col-md-12 centered">
				<div class="panel panel-default">
					<div class="panel-body">
            <table class="table">
              <div class="alert alert-info">
                <strong>Silahkan Upload Persyaratan Sesuai Dengan Ketentuan berikut!</strong><br>
                1. Foto Maksimal 5 MB<br>
                2. Jenis Foto Harus JPG atau PNG<br>
              </div>
              <thead>
              <tr>
                  <th>Upload Foto</th>
                  <th>Aksi</th>
              </tr>
              </thead>
              <form action="" method="POST" enctype="multipart/form-data">
              <tbody>
                  <tr>
                    <td><input type="file" name="file" ></td>
                    <td><input type="submit" name="upload" class="btn btn-success" value="Upload"></td>
                  </tr>
              </tbody>
              </form>
              </table>

              <table>
          			<?php
            			$data = mysql_query("select * from uploads");
            			while($d = mysql_fetch_array($data)){
                      if($nim == $d['npsn'] ){
                      ?>
                      <tr>
                          <img src="<?php echo "evaluasi/foto/file/".$d['nama_file'];?>" width="25%" height="25%"><b>
                      </tr>
                      <?php
                        }else{
                      }

                    }?>
          		</table>
          </div>
        </div>
      </div>
    </div>

    <?php
    		if(isset($_POST['upload'])){
    			$ekstensi_diperbolehkan	= array('png','jpg');
    			$nama = $_FILES['file']['name'];
    			$x = explode('.', $nama);
    			$ekstensi = strtolower(end($x));
    			$ukuran	= $_FILES['file']['size'];
    			$file_tmp = $_FILES['file']['tmp_name'];

    			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    				if($ukuran < 5044070){
    					move_uploaded_file($file_tmp, 'evaluasi/foto/file/'.$nama);
    					$query = mysql_query("INSERT INTO uploads VALUES(NULL,'$nim', '$nama')");
    					if($query){
    						echo "<script>alert('Foto berhasil Disimpan');window.location=history.go(-1) </script>";
    					}else{
    						echo "<script>alert('Gagal Mengupload Foto');window.location=history.go(-1) </script>";
    					}
    				}else{
    					echo "<script>alert('Ukuran Foto Terlalu Besar');window.location=history.go(-1) </script>";
    				}
    			}else{
    				echo "<script>alert('File Tidak Di Dukung');window.location=history.go(-1) </script>";
    			}
    		}

  ?>
