<?php
include('../functions.php');
if (!isset($_GET['id']))
{
    echo 'No ID was given...';
    exit;
}

$id_users = $_GET['id'];

$sql = "DELETE FROM users WHERE id = '$id'";
$result = mysqli_query($db, $sql);

if($result){
    header('Location: verifikasi_user.php');

  } else{

     echo "gagal";
  }
mysql_close();
?>