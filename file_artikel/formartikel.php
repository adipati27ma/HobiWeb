<?php
include "../file_admin/proteksiartikel.php";
?>

<title>Upload Artikel</title>
<form id="formberita" method="post" action="../file_artikel/saveartikel.php" enctype="multipart/form-data">
  <center>
   <label>Judul Artikel:</label><br>
  <div class="col-lg-6">
   <input type="text" class="form-control" name="judul_artikel" required>
  </div>
  
  
   <label><br />Sub-Judul Artikel:</label><br>
  <div class="col-lg-6">
   <input type="text" class="form-control" name="subjudul_artikel" required>
  </div>

   <label><br />Isi Artikel:</label><br>
   
   <textarea style="width:600px; height:450px" class="form-control" name="isi_artikel" required></textarea>
 
  
   <label><br />Penulis Artikel:</label><br>
  <div class="col-lg-4">
   <input type="text" class="form-control" name="penulis_artikel" required>
  </div>
  
  
   <label><br />Tanggal Artikel:</label><br>
  <div class="col-lg-4">
   <input type="text" class="form-control" name="tgl_artikel" required>
  </div>
  
  
  <label><br />ID Kategori:</label><br>
  <div class="col-lg-4">
   <input type="text" class="form-control" name="id_kategori" required>
  </div>
  
  <label><br />Kategori Artikel:</label><br>
  <div class="col-lg-4">
   <input type="text" class="form-control" name="kategori_artikel" required>
  </div>
  
  
   <label><br />Photo Artikel:</label><br>
   <input type="file" class="btn btn-default" name="images"/>
   <br />
   
   <label><br />Photo-Bait Artikel:</label><br>
   <input type="file" class="btn btn-default" name="imagesbait"/>
  
 <br />
  <input type="submit" class="btn btn-info" value="Kirim">
 
</form>