<title>List Artikel</title>
<?php
include "../koneksi.php";
include "../file_admin/proteksiartikel.php";

echo "<center><div class='table-responsive'><table border=1 class='table table-hover'><thead bgcolor=orange>
<td><b><center>No</td>
<td><b><center>Judul Artikel</td>
<td><b><center>Subjudul Artikel</td>
<td><b><center>Isi Artikel</td>
<td><b><center>Foto Artikel</td>
<td><b><center>Tanggal Artikel</td>
<td><b><center>Delete</td>
<td><b><center>Edit</td>
</thead>";
$query=mysqli_query( $link, "SELECT * FROM artikel ORDER BY id_artikel DESC");

while($var=mysqli_fetch_array($query)){
$art = substr($var['isi_artikel'],0,100);

echo "<tr>
<td>$var[id_artikel]</td>
<td>$var[judul_artikel]</td>
<td>$var[subjudul_artikel]</td>
<td>$art</td>
<td>$var[photo_artikel]</td>
<td>$var[tgl_artikel]</td>
<td><center><a href='../file_artikel/deleteartikel.php?id_artikel=$var[id_artikel]'>Delete</a></center></td>
<td><center><a href='../file_artikel/formeditartikel.php?id_artikel=$var[id_artikel]'>Edit</a></center></td>
</tr>";

}
echo "</table></div>";
?>
