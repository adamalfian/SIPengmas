<?php

require '../connect.php';
if (!isset($_GET['id'])) {
    echo 'No ID was given...';
    header('Location: verifikasi_user_tunda.php');
    exit;
}

$id = $_GET['id'];

$sql = "UPDATE users SET user_status='konfirmed' WHERE id=$id";
$result = mysqli_query($con, $sql);

if ($result) {
    header('Location: verifikasi_user_tunda.php');
} else {
    echo 'gagal';
}
mysql_close();
