<?php ob_start();
 include "../koneksi.php";
 mysqli_query( $link, "DELETE FROM artikel WHERE id_artikel='$_GET[id_artikel]'");
 header('location:../file_admin/admin');

?>