<?php

require '../connect.php';
if (!isset($_GET['id'])) {
    echo 'No ID was given...';
    header('Location: verifikasi_kegiatan.php');
    exit;
}

$id = $_GET['id'];

$sql = "UPDATE kegiatan SET status='Ditolak' WHERE id_kegiatan=$id";
$result = mysqli_query($con, $sql);

if ($result) {
    header('Location: verifikasi_kegiatan_tunda.php');
} else {
    echo 'gagal';
}
mysql_close();
