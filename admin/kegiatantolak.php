<?php

require '../connect.php';
if (!isset($_GET['id'])) {
    echo 'No ID was given...';
    exit;
}

$id = $_GET['id'];

$sql = "UPDATE kegiatan SET status='Ditolak' WHERE id_kegiatan=$id";
//$sql = "DELETE FROM kegiatan WHERE id_kegiatan = $id";
$result = mysqli_query($con, $sql);

if ($result) {
    header('Location: verifikasi_kegiatan.php');
} else {
    echo 'gagal';
}
mysql_close();