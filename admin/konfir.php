<?php
include('../functions.php');
if (!isset($_GET['id']))
{
    echo 'No ID was given...';
    exit;
}

$id = $_GET['id'];

$sql = "UPDATE users SET user_status='konfirmed' WHERE id=$id";
//$sql = "DELETE FROM kegiatan WHERE id_kegiatan = $id";
$result = mysqli_query($db, $sql);

if($result){
    header('Location: verifikasi_user.php');

  } else{

     echo "gagal";
  }
mysql_close();
?>