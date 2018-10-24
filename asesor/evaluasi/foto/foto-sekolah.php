<?php
include '../koneksi.php';
if (isset($_GET['id'])) {
  $query = mysql_query ("SELECT * FROM identitas_sekolah WHERE npsn='".$_GET['id']."'");
  $row = mysql_fetch_array ($query);
  $id = $row['npsn'];
}
?>
<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Foto Sekolah</h3>
			</div>
		</div>

    <div class="row">
			<div class="col-md-12 centered">
				<div class="panel panel-default">
					<div class="panel-body">
            <table class="table">
          			<?php
            			$data = mysql_query("select * from uploads");
            			while($d = mysql_fetch_array($data)){
                    if ($id == $d['npsn'] ){
                      ?>
                      <tr>
                          <img src="<?php echo "../sekolah/evaluasi/foto/file/".$d['nama_file'];?>" width="25%" height="25%"><b>
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
