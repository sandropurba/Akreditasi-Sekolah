<?php
	session_start();
	unset($_SESSION['nim']);
?>
<div class="container pt">
		<div class="row mt">
		<form action="konten/login_proses.php" method="POST">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>LOGIN</h3>
				<hr>
			</div>
		</div>
		<div class="row mt">
			<div class="col-lg-8 col-lg-offset-2">
				<form role="form">
				  <div class="form-group">
				    <input type="name" class="form-control" id="username" placeholder="NPSN / NIP" name="username">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
				  </div>
				  <div class="form-group">
				    <select class="form-control" id="jenis" name="jenis">
				    	<option value=''>-- Login Sebagai --</option>
				    	<option value='sekolah'>Sekolah</option>
						<option value='asesor'>Asesor</option>
				    </select>
				  </div>
				    <br>
				  <input type="submit" class="btn btn-success" value="Login">
				</form>
			</div>
			</form>
		</div><!-- /row -->
	</div><!-- /container -->
	<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		var jenis = document.getElementById("jenis").value;
		if (username != "" && password!="" && jenis!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
