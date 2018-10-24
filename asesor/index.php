<?php
include "../koneksi.php";
session_start();
if(!isset($_SESSION['nim'])){
		echo "<script>alert('Anda belum login');document.location='../index.php' </script> ";
	}else{
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Akreditasi Sekolah</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

</head>
<?php
	$nim = $_SESSION['nim'];
	$qry = mysql_query("select * from identitas_asesor where nip='$nim'");
	$us = mysql_fetch_array($qry);
?>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand"><b><span>Akreditasi</span></b> Sekolah</a>
				<a class="navbar-brand navbar-right">Selamat datang <?php echo $us['nama']; ?></a>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
				<center><img src="../assets/img/logo.png" width="100px" height="100px"></center>
		</form>
		<ul class="nav menu">
			<li <?php if (!isset($_GET['ap'])) echo "class='active'";?> ><a href="./"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li <?php if (isset($_GET['ap']) && $_GET['ap']=="identitas") echo "class='active'";?>><a href="?ap=identitas"><svg class="glyph stroked table"><use xlink:href="#stroked-open-folder"></use></svg>Identitas Asesor</a></li>
			<li <?php if (isset($_GET['ap']) && $_GET['ap']=="penilaian") echo "class='active'";?>><a href="?ap=penilaian"><svg class="glyph stroked calendar"><use xlink:href="#stroked-male-user"></use></svg>Penilaian</a></li>
			<li <?php if (isset($_GET['ap']) && $_GET['ap']=="panduan") echo "class='active'";?>><a href="?ap=panduan"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-notepad"></use></svg>Panduan</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="logout.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-lock"></use></svg> Sign Out</a></li>
		</ul>

	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


		<?php
			include "../koneksi.php";
			include "controller.php";
		?>

	</div>
</div>	<!--/.main-->



</body>

</html>
<?php
}
 ?>
