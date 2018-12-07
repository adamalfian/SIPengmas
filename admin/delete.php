<?php

require '../connect.php';
if (!isset($_GET['id'])) {
    echo 'No ID was given...';
    exit;
}

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";
$result = mysqli_query($con, $sql);

if ($result) {
    header('Location: verifikasi_user.php');
} else {
    echo 'gagal';
}
mysql_close();
