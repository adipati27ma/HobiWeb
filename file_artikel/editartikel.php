<?php ob_start();
include "../koneksi.php";
$id			= $_POST['id'];
$judul		= $_POST['judul'];
$subjudul	= $_POST['subjudul'];
$isi		= $_POST['isi'];
$foto		= $_POST['foto'];
$fotobait		= $_POST['fotobait'];

$query	= mysqli_query($link, "update artikel set id_artikel='$id', judul_artikel='$judul', subjudul_artikel='$subjudul', isi_artikel='$isi', photo_artikel='$foto', photobait_artikel='$fotobait' WHERE id_artikel='$id'");
header('location:../file_admin/admin');
?>
