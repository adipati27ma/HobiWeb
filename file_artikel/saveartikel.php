<?php ob_start();
include "../koneksi.php";
if($_POST){
 $id				= $_POST['id_artikel'];
 $judulartikel      = $_POST['judul_artikel'];
 $subjudulartikel	= $_POST['subjudul_artikel'];
 $isiartikel      	= $_POST['isi_artikel'];
 $penulisartikel 	= $_POST['penulis_artikel'];
 $tglartikel  		= $_POST['tgl_artikel'];
 $idkategori  		= $_POST['id_kategori'];
 $kategoriartikel  		= $_POST['kategori_artikel'];
 $photoartikel  	= $_FILES['images']['name'];
 $photobaitartikel  = $_FILES['imagesbait']['name'];
 
 if(!empty($_FILES['images']['tmp_name'])){
  move_uploaded_file($_FILES['images']['tmp_name'],'../img/KontenPost'.$id.'/'.$_FILES['images']['name']);

  mysqli_query($link, "insert into artikel(judul_artikel, subjudul_artikel, isi_artikel, penulis_artikel, tgl_artikel, id_kategori, kategori_artikel, photo_artikel, photobait_artikel)
  values('$judulartikel', '$subjudulartikel', '$isiartikel', '$penulisartikel', '$tglartikel', '$idkategori', '$kategoriartikel', '$photoartikel', '$photobaitartikel')"); 
  
 } else {
  mysqli_query( $link, "insert into artikel(judul_artikel, subjudul_artikel, isi_artikel, penulis_artikel, tgl_artikel, id_kategori, kategori_artikel, photobait_artikel)
  values('$judulartikel', '$subjudulartikel', '$isiartikel' ,'$penulisartikel', '$tglartikel', '$idkategori', '$kategoriartikel', '$photobaitartikel')");
  
 }
 header('location:../file_admin/admin?pesan=terkirim');
 exit;
}

?>