<?php
// membuat koneksi
$conn = mysqli_connect("localhost", "root", "", "data_sim");
$data  = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM tabel_buku"));
?>


<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Sistem Informasi Pendataan Buku</title>

	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/ionicons.css" rel="stylesheet">
	<link href="css/layerslider.css" rel="stylesheet">
	<link href="css/stylecss.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/stylecss02.css">

	<style type="text/css">
		body {
			background-color: pink;
			padding: 20px 20px 20px 20px;
		}
	</style>

</head>

<body>
	<header class="fixed-top">
		<div class="top-menu">

			<ul class="left-area welcome-area">
				<li class="hello-blog">
					<h3>Bookspace</h3>
				</li>
			</ul><!-- left-area -->

			<div class="right-area">

				<div class="src-area">
					<form action="" method="GET">
						<input class="src-input" type="text" name="cari" placeholder="Search">
						<button class="src-btn" type="submit" name="tombolcari"><i class="ion-ios-search-strong"></i></button>
					</form>
				</div>
			</div>

		</div>
		<div class="bottom-area">
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>
			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="buku.php">HOME</li>
				<li><a href="edit_kategori.php">EDIT KATEGORI</a></li>
				<li><a href="edit_buku.php">EDIT BUKU</a></li>
				<li><a href="dm_kategori.php">TAMBAH KATEGORI</a></li>
				<li><a href="dm_buku.php">TAMBAH BUKU</a></li>
				<li><a href="login_admin.php">LOGOUT</a></li>
			</ul><!-- main-menu -->
		</div><!-- conatiner -->
	</header>

	<div class="table-users">
		<br><br><br><br>
		<div class="header">INFORMASI BUKU</div>
		<table cellspacing="0">

			<th width="100">
				<center>NO
			</th>
			<th width="250">
				<center>GAMBAR
			</th>
			<th width="180">
				<center>JUDUL BUKU
			</th>
			<th width="180">
				<center>KATEGORI
			</th>
			<th width="185">
				<center>PENULIS
			</th>
			<th width="500">
				<center>DESKRIPSI
			</th>
			<th width="280">
				<center>EDIT BUKU
			</th>
			</tr>

			<?php $i = 1 ?>
			<?php
			$koneksi = mysqli_connect("localhost", "root", "", "data_sim");
			if (isset($_GET['tombolcari'])) {
				$cari = $_GET['cari'];
				$result = mysqli_query($koneksi, "select * from tabel_buku where tabel_buku like '%" . $cari . "%'");
			} else {
				$result = mysqli_query($koneksi, "select * from tabel_buku");
			}
			while ($data = mysqli_fetch_assoc($result)) {
			?>

				<tr>
					<td>
						<center></center><?= $i++ ?>
					</td>
					<td>
						<center></center><img src="images/<?php echo $data['gambar'] ?>" height="81%" width="113px">
					</td>
					<td>
						<center></center><?= $data['judulbuku'] ?>
					</td>
					<td>
						<center></center><?= $data['kategori'] ?>
					</td>
					<td>
						<center></center><?= $data['penulis'] ?>
					</td>
					<td>
						<center></center><?= $data['deskripsi'] ?>
					</td>
					<td>
						<center><a class="btn btn-success" href="update_buku.php?id_buku=<?php echo $data['id_buku']; ?>">edit <a class="btn btn-danger" href="delete_bukusql.php?id=<?php echo $data['id_buku']; ?>">hapus</a></a>
					</td>
					<td>
				</tr>
			<?php } ?>
		</table>



		<br>
		<footer>
			<div class="container">
				<div class="row">

					<div class="col-sm-6">
						<div class="footer-section">
							<p class="copyright">Althea Grishelda | AltheaRajin <i class="ion-heart" aria-hidden="true"></i></a></p>
						</div><!-- footer-section -->
					</div><!-- col-lg-4 col-md-6 -->

				</div><!-- row -->
			</div><!-- container -->
		</footer>


		<!-- SCIPTS -->

		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/tether.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/layerslider.js"></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>