<?php ob_start();
include "../koneksi.php";
$update			= $_POST['lastpost'];


$query	= mysqli_query($link, "update lastupdate set terakhir_update='$update'");
header('location:../file_admin/admin');
?>