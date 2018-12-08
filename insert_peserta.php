<?php 
require 'connect.php';
if (!isLoggedIn()) {
    header('location: login.php');
}
    // connect to database
    //$con = mysqli_connect("localhost", "root", "", "pengmas") or die($con);

$ikut_kegiatan = mysqli_real_escape_string($con, $_POST['ikut_kegiatan']);
$nama_peserta = mysqli_real_escape_string($con, $_POST['nama_peserta']);
$jk_peserta = mysqli_real_escape_string($con, $_POST['jk_peserta']);
$nohp_peserta = mysqli_real_escape_string($con, $_POST['nohp_peserta']);
$alamat_peserta = mysqli_real_escape_string($con, $_POST['alamat_peserta']);
$angkatan_peserta = mysqli_real_escape_string($con, $_POST['angkatan_peserta']);
//$tanggal = mysqli_real_escape_string($con, $_POST['tanggal']);
$id = ''.$_SESSION['user']['id'].'';
        //print "<h2>" . $tanggal . "</h2>";

$sql = "INSERT INTO kegiatan (id,ikut_kegiatan,nama_peserta,jk_peserta,nohp_peserta,alamat_peserta,angkatan_peserta) VALUES('$id','$ikut_kegiatan', '$nama_peserta', '$jk_peserta', '$nohp_peserta', '$alamat_peserta','$angkatan_peserta')";
mysqli_query($con, $sql);
            header('location: kegiatan_pengmas.php'); //redirect to home page
            ?>