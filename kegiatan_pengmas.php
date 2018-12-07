<?php 
require 'connect.php';
if (!isLoggedIn()) {
    header('location: login.php');}
?>
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cube &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
	
	<div class="gtco-loader"></div>
	
	<div id="page">

		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo"><a href="index.php"><img src="images/logo.png" alt="Free HTML5 Website Template by GetTemplates.co"></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.php">Informasi</a></li>
							<li class="has-dropdown">
								<a href="#">Kegiatan</a>
								<ul class="dropdown">
									<li><a href="pengmas.php">Pengabdian Masyarakat</a></li>
									<li><a href="donasi.php">Donasi</a></li>
								</ul>
							</li>
							<?php if (!isLoggedIn()) {
    echo "<li><a href='login.php'>Login</a></li>";
} else {
                                echo "<li class='has-dropdown'>
							<a href=>".$_SESSION['user']['username']."</a>
							<ul class='dropdown'>
							<li><a href='daftar_kegiatan.php''>Ikut kegiatan Pengmas</a></li>
							<li><a href='kegiatan_pengmas.php'>Kegiatan Pengmas Saya</a></li>
							<li><a href='upload_Pembayaran.php'>Bayar kegiatan donasi</a></li>
							<li><a href='profil.php'>Melihat Profil</a></li>
							<li><a href='sertif.php'>Sertifikat</a></li>
							<li><a href='index.php?logout=1'>logout</a></li>
							</ul>
							</li>";
                            }
                                // echo "<li><a href='index.php?logout=1'>". $_SESSION["user"]["username"] ."</a></li>";
                                // echo "<li><form method='POST'>
                                // 		<input type='submit' name='logout_btn' value='Logout'>
                                // 	  </form></li>";
                            ?>
							
						</ul>
					</div>
				</div>
				
			</div>
		</nav>

		<header id="gtco-header" class="gtco-cover" role="banner">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">
						<div class="display-t">
							<div class="display-tc">
								<div class="row">
									<div class="col-md-5 text-center header-img">
										<img src="images/logo-hmtc.jpg" alt="Free HTML5 Website Template by GetTemplates.co">
									</div>
									<div class="col-md-7 copy">
										<h1>Sistem Informasi Kegiatan Pengabdian Masyarakat dan Donasi</h1>
										<p>Departemen Hubungan Luar, Himpunan Mahasiswa Teknik Computer-Informatika (HMTC)</p>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END #gtco-header -->

		
		<!-- END .gtco-client -->

		<div class="gtco-services gtco-section">
			<div class="gtco-container">
				<div class="table-responsive m-t-40">
					<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Nama Kegiatan</th>
								<th>Nama Peserta</th>
								<th>Nomor Telepon</th>
								<th>Alamat</th>
								<th>Angkatan</th>
								<th>Waktu Pelaksanaan</th>
								<th>Status</th>
								
							</tr>
						</thead>
						<tbody>
							<?php
                                            //include('connect.php');
                            $sql = mysqli_query($con, 'SELECT * FROM Kegiatan where id = '.$_SESSION['user']['id'].'');
                            if (mysqli_num_rows($sql) > 0) {
                                $no = 1;
                                while ($data = mysqli_fetch_assoc($sql)) {
                                    echo '
									<tr>
									<td >'.$data['ikut_kegiatan'].'</td>
									<td >'.$data['nama_peserta'].'</td>
									<td >'.$data['nohp_peserta'].'</td>
									<td >'.$data['alamat_peserta'].'</td>
									<td >'.$data['angkatan_peserta'].'</td>
									<td >'.$data['tanggal'].'</td>
									<td >'.$data['status'].'</td>
									

									</tr>
									';
                                    ++$no;
                                }
                            } else {
                                echo '
								<tr bgcolor="#fff">
								<td align="center" colspan="7" align="center">Tidak ada data!</td>
								</tr>
								';
                            }
                            ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END .gtco-services -->

		
		

		<footer id="gtco-footer" class="gtco-section" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-pb-md">
					<div class="col-md-8 col-md-offset-2 gtco-cta text-center">
						<h3>Himpunan Mahasiswa Teknik Computer-Informatika (HMTC)</h3>
						<p><a href="http://hmtc.if.its.ac.id/" class="btn btn-white btn-outline">Contact Us</a></p>
					</div>
				</div>
				
			</div>
			
		</footer>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

</body>
</html>

