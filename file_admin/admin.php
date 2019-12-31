<?php include "proteksi.php"; 
include "../koneksi.php";
?>
<html><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload dan Update Artikel</title>

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
		 <div class="container-fluid" style="background-color:#F8F8F8">
		   <div class="row">
		   	<div class="col-lg-1">
		   	</div>
				<div class="alert alert-success" class="col-lg-3">
		 	 		Login berhasil!
				</div>
		   </div>		  
		<br><a href="../index">Kembali ke halaman utama</a>
		<br><a href='logout.php'>Logout</a>
		 <hr />
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "terkirim"){
			echo " <div class='container-fluid'> <div class='row'>
					<div class='col-lg-1'></div>
					 <div class='alert alert-success' class='col-lg-3'>Konten berhasil dikirim!</div>
				   </div> </div>";
		}
	}
	?>
		  </div>

<div class="container-fluid">
 <div class="form-group row">
 	<div class="col-lg-4">
			<ol class="list-group-item-info">
				<li class="list-group-item-info"> PC/Laptop (Windows System)</li>
				<li class="list-group-item-info"> PC/Laptop (Hardware)</li>
				<li class="list-group-item-info"> Application (Android)</li>
				<li class="list-group-item-info"> Application (Linux)</li>
				<li class="list-group-item-info"> Application (Windows)</li>
				<li class="list-group-item-info"> Application (Other)</li>
				<li class="list-group-item-info"> Elektro</li>
				<li class="list-group-item-info"> Web Developer</li>
				<li class="list-group-item-info"> Other</li>
			</ol>			
 				<?php 
				$last = mysqli_query( $link, "SELECT * FROM lastupdate");
				while($row=mysqli_fetch_array($last)){
				?>
				<form action="editlastpost.php" method="post">
				<label> Last post :</label>
				<input class="form-control" type="text" name="lastpost" value="<?php echo $row['terakhir_update'];?>"size="30">
				<input type="submit" class="btn btn-info" value="Update">
				<?php
				}
				?>
				</form>
		
	 </div>
 		<div class="col-lg-8">
<?php
echo "<center><h3>Silahkan upload artikel :</h3><br>";
include "../file_artikel/formartikel.php";
?>
		</div>
	</div>
<hr /></div>


<div class="container-fluid">
 <div class="row">
<?php
echo "<br><br><h3 align:'left'>List Artikel yang telah dibuat :</h3>";
include "../file_artikel/listartikel.php";
?>
 </div>
	<br><br><br><br><hr>
</div>



<!-- Footer -->
     <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://twitter.com/adi_loc30" title="Find me on Twitter" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/Adipati.Itu.Jago" title="Find me on Facebook" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/adipati27ma" title=" Find me on Github" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; A-Tech 2019</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
</html>