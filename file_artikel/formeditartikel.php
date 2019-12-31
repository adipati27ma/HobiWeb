<?php
include "../koneksi.php";
$id		= $_GET['id_artikel'];
$query	= mysqli_query( $link, "SELECT * FROM artikel WHERE id_artikel='$id'");

include "../file_admin/proteksiartikel.php";
?>
<html><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Artikel</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>    <!-- Custom styles for this template -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">

	<!-- Calendar CSS -->
    <link href="../calendar.css" rel="stylesheet">



  </head>

<body>
<form action="editartikel.php" method="post">
<?php
while($row=mysqli_fetch_array($query)){
?>
<input type="Hidden" name="no" value="<?php echo $no;?>" />
<h3>Edit Artikel</h3>
<table width="900"><tr>
<td width="103">Id Artikel :</td>
<td width="785"> <input type="text" class="form-control" name="id" value="<?php echo $row['id_artikel'];?>" size="10"> (tidak bisa diganti)</td>
</tr>
<tr>
<td><br>Judul Artikel :</td>
<td><br> <input class="form-control" type="text" name="judul" value="<?php echo $row['judul_artikel'];?>"size="30"></td>
</tr>
<tr>
<td><br>Sub-Judul Artikel :</td>
<td><br> <input class="form-control" type="text" name="subjudul" value="<?php echo $row['subjudul_artikel'];?>"size="30"></td>
</tr>
<tr>
<td><br>Isi Artikel :</td>
<td>&nbsp;</td>
</tr>
<tr>
  <td colspan="2"><textarea class="form-control" style="width:1240px; height:372px" name="isi" size="20"><?php echo $row['isi_artikel'];?></textarea></td>
  </tr>
<tr>
<td><br>Foto Artikel :</td>
<td> <br><input class="form-control" type="text" name="foto" value="<?php echo $row['photo_artikel'];?>"size="20"></td>
</tr>
<tr>
<td><br>Foto-Bait Artikel :</td>
<td> <br><input class="form-control" type="text" name="fotobait" value="<?php echo $row['photobait_artikel'];?>"size="20"></td>
</tr>
<tr>
<td colspan=2><br><input type="submit" class="btn btn-info" value="Update"><a href="../admin">  <button class="btn btn-secondary">Kembali</button></a></td>
</tr>
<?php } ?>
</table>

</form>

</body>

	<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
</html>
