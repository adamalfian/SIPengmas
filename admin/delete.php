<?php

require '../connect.php';
if (!isset($_GET['id'])) {
    echo 'No ID was given...';
    header('Location: verifikasi_user.php');
    exit;
}

$id = $_GET['id'];
$user = getUserById ($id);
$hapus = "". $user['user_status'] . "";

$sql = "DELETE FROM users WHERE id = $id";
$result = mysqli_query($con, $sql);

if ($hapus == "tunda") {
    header('Location: verifikasi_user_tunda.php');
} else {
    header('Location: verifikasi_user_terima.php');
}
mysql_close();
