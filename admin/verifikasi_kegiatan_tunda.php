<?php
require '../connect.php';

if (!isAdmin()) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>SI Pengmas dan Donasi - HMTC</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- Main wrapper  -->
        <div id="main-wrapper">
            <!-- header header  -->
            <div class="header">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- Logo -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">
                            <!-- Logo icon -->
                            <h4>  SI Pengmas dan Donasi HMTC</h4>
                        </div>
                        <!-- End Logo -->
                        <div class="navbar-collapse">
                            <!-- toggle and nav items -->
                            <ul class="navbar-nav mr-auto mt-md-0">
                                <!-- This is  -->
                                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                                <!-- Messages -->
                                <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i></a>
                                 
                                </li>
                                <!-- End Messages -->
                            </ul>
                            <!-- User profile and search -->
                            <ul class="navbar-nav my-lg-0">
                                <!-- End Messages -->
                                <!-- Profile -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo 'Admin '.$_SESSION['user']['username'].' '; ?></a>
                                    <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                        <ul class="dropdown-user">
                                            <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                            <li><a href="../index.php?logout=1"><i class="fa fa-power-off"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- End header header -->
                <!-- Left Sidebar  -->
                <div class="left-sidebar">
                    <!-- Sidebar scroll-->
                    <div class="scroll-sidebar">
                        <!-- Sidebar navigation-->
                        <nav class="sidebar-nav">
                            <ul id="sidebarnav">
                                <li class="nav-devider"></li>
                                <li class="nav-label">Home</li>
                                
                                
                                <li class="nav-label">Features</li>
                                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Pengmas</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="list_pengmas.php">Daftar Kegiatan Pengmas</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Verifikasi Pengmas</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <!-- <li><a href="verifikasi_pembayaran.php">Verifikasi Pembayaran</a></li> -->
                                        <li><a href="verifikasi_kegiatan_tunda.php">Verifikasi pengmas</a></li>
                                        <li><a href="verifikasi_kegiatan_terima.php">Pengmas diterima</a></li>
                                        <li><a href="verifikasi_kegiatan_tolak.php">Pengmas ditolak</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Verifikasi Akun</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <!-- <li><a href="verifikasi_pembayaran.php">Verifikasi Pembayaran</a></li> -->
                                        <li><a href="verifikasi_user_tunda.php">Verifikasi Akun</a></li>
                                        <li><a href="verifikasi_user_terima.php">Akun terverifikasi</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Sidebar navigation -->
                    </div>
                    <!-- End Sidebar scroll-->
                </div>
                <!-- End Left Sidebar  -->
                <!-- Page wrapper  -->
                <div class="page-wrapper">
                    <!-- Bread crumb -->
                    <div class="row page-titles">
                        <div class="col-md-5 align-self-center">
                            <h3 class="text-primary">Dashboard</h3> </div>
                            <div class="col-md-7 align-self-center">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!-- End Bread crumb -->
                        <!-- Container fluid  -->
                        <div class="container-fluid">
                            <!-- Start Page Content -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h1>Verifikasi Kegiatan Pengmas</h1>
                                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                            <div class="table-responsive m-t-40">
                                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Kegiatan</th>
                                                            <th>Tanggal</th>
                                                            <th>Nama Peserta</th>
                                                            <th>Nomor Telepon</th>
                                                            <th>Alamat</th>
                                                            <th>Angkatan</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                            //include('connect.php');
                                                        $sql = mysqli_query($con, 'SELECT * FROM Kegiatan where status = "tunda" ');
                                                        if (mysqli_num_rows($sql) > 0) {
                                                            $no = 1;
                                                            while ($data = mysqli_fetch_assoc($sql)) {
                                                                echo '
                                                                <tr>
                                                                <td >'.$data['ikut_kegiatan'].'</td>
                                                                <td >'.$data['tanggal'].'</td>
                                                                <td >'.$data['nama_peserta'].'</td>
                                                                <td >'.$data['nohp_peserta'].'</td>
                                                                <td >'.$data['alamat_peserta'].'</td>
                                                                <td >'.$data['angkatan_peserta'].'</td>
                                                                <td >'.$data['status'].'</td>
                                                                <td><button class="btn btn-success btn-xs"> <a href="kegiatankonfir.php?id='.$data['id_kegiatan'].'" style="color: #fff; text-decoration: none;"> Konfirmasi</button> || <button class="btn btn-danger btn-xs"> <a href="kegiatantolak.php?id='.$data['id_kegiatan'].'" style="color: #fff; text-decoration: none;"> Tolak</button> </td>

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
                                </div>
                            </div>
                            <!-- End PAge Content -->
                        </div>
                        <!-- End Container fluid  -->
                        <!-- footer -->

                        <!-- End footer -->
                    </div>
                    <!-- End Page wrapper  -->
                </div>
                <!-- End Wrapper -->
                <!-- All Jquery -->
                <script src="js/lib/jquery/jquery.min.js"></script>
                <!-- Bootstrap tether Core JavaScript -->
                <script src="js/lib/bootstrap/js/popper.min.js"></script>
                <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
                <!-- slimscrollbar scrollbar JavaScript -->
                <script src="js/jquery.slimscroll.js"></script>
                <!--Menu sidebar -->
                <script src="js/sidebarmenu.js"></script>
                <!--stickey kit -->
                <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
                <!--Custom JavaScript -->
                <script src="js/custom.min.js"></script>


                <script src="js/lib/datatables/datatables.min.js"></script>
                <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
                <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
                <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
                <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
                <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
                <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
                <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
                <script src="js/lib/datatables/datatables-init.js"></script>
            </body>

            </html>