<?php

require '../connect.php';
if (!isset($_GET['id'])) {
    echo 'No ID was given...';
    header('Location: list_pengmas.php');
    exit;
}

$id = $_GET['id'];

$sql = "DELETE FROM pengmas WHERE id_pengmas = $id";
$result = mysqli_query($con, $sql);

if ($result) {
    header('Location: list_pengmas.php');
} else {
    echo "Gagal";
}
mysql_close();
