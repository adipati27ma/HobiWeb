<?php

include "koneksi.php";

//tampilkan konten
$id = $_GET['p'];

$hasil = mysqli_query($link, "SELECT * FROM artikel WHERE id_artikel='$id'");

$data=mysqli_fetch_array($hasil);

//page navigation program

if(isset($_GET['p'])) {
  $laman_sekarang = $_GET['p'];
  $laman_sekarang = ($laman_sekarang > 1) ? $laman_sekarang : 1;
}
$ambil = mysqli_query($link, "SELECT * FROM artikel");
$total_data = mysqli_num_rows($ambil);
?>
<?php
$title = $data['judul_artikel'];
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

	<!-- Calendar CSS -->
    <link href="calendar.css" rel="stylesheet">



  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index">A-Tech</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post">POST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/KontenPost<?php echo $data['id_artikel'];?>/<?php echo $data['photo_artikel'];?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo $data['judul_artikel'];?></h1>
              <h2 class="subheading"><?php echo $data['subjudul_artikel'];?></h2>
              <span class="meta">Posted by
                <a href="www.instagram.com/adipati_ma/"><?php echo $data['penulis_artikel'];?></a>
                on <?php echo $data['tgl_artikel'];?><br>
				Category : <?php echo $data['kategori_artikel'];?>
			  </span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->

     <!-- Left Bar-->
    <div class="container-fluid">
      <div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" align="left" style="background-color:#F8F8F8" align="left">

			<?php
				session_start();
				if (isset($_SESSION['username'])){
				echo"<button class='btn btn-block'>Welcome <b>Admin,</b></button>";
				echo "<a href='file_admin/logout.php'><button class='btn btn-danger' type='button' name='logout' style='color:#ff9191'>LOGOUT</button></a>
					  <a href='file_admin/admin'><button class='btn btn-warning' type='button' name='panel' style='color:#fbff96'>Panel Admin</button></a><hr>";
					} else {
					echo '<a href="file_admin/loginadmin"><button type="button" class="btn btn-link float-left">admin</button></a><br><br>';}
			?>
			<div align="left">
				<form role="search" method="post" action="cari-artikel">
					<div class="input-group">
					  <input type="text" placeholder="Cari artikel. . ." name="keyword">
						<span>
							<button class="btn btn-success" type="submit" name="submit-search">
						      <span class="glyphicon glyphicon-search"></span> Search
							</button>
						</span>
					</div>
				</form>
			</div>
		<br><?php include "calendar.php"; ?><br><br>


				<div class="container">
				  <h2>Category</h2>
				  <div class="panel-group">
					<div class="panel panel-default">
								<ul style="list-style-type:circle">

								  <div class="panel-heading">
									<h4 class="panel-title">
											<li><a data-toggle="collapse" href="#collapse1">PC / Laptop</a></li>
									</h4>
								  </div>
								  <div id="collapse1" class="panel-collapse collapse">
									<ul class="list-group">
									  <li class="list-group-item"><a href="halaman_kategori?k=1">Windows System</a></li>
									  <li class="list-group-item"><a href="halaman_kategori?k=2">Hardware</a></li>
									</ul>
									<hr>
								  </div>

								  <div class="panel-heading">
									<h4 class="panel-title">
											<li><a data-toggle="collapse" href="#collapse2">Application</a></li>
									</h4>
								  </div>
								  <div id="collapse2" class="panel-collapse collapse">
									<ul class="list-group">
									  <li class="list-group-item"><a href="halaman_kategori?k=3">Android</a></li>
									  <li class="list-group-item"><a href="halaman_kategori?k=4">Linux</a></li>
									  <li class="list-group-item"><a href="halaman_kategori?k=5">Windows</a></li>
									  <li class="list-group-item"><a href="halaman_kategori?k=6">Other</a></li>
									</ul>
									<hr>
								  </div>

								  <div class="panel-heading">
									<h4 class="panel-title">
											<li><a data-toggle="collapse" href="#collapse3">Technology</a></li>
									</h4>
								  </div>
								  <div id="collapse3" class="panel-collapse collapse">
									<ul class="list-group">
									  <li class="list-group-item"><a href="halaman_kategori?k=7">Elektro</a></li>
									  <li class="list-group-item"><a href="halaman_kategori?k=8">Web Developer</a></li>
									</ul>
									<hr>
								  </div>

								  <div class="panel-heading">
									<h4 class="panel-title">
											<li><a data-toggle="collapse" href="#collapse4">Other</a></li>
									</h4>
								  </div>
								  <div id="collapse4" class="panel-collapse collapse">
									<ul class="list-group">
									  <li class="list-group-item"><a href="halaman_kategori?k='9'">Others</a></li>
									</ul>
									<hr>
								  </div>

								</ul>
					</div>
				  </div>
				</div>

		</div>

		<!-- Content Bar -->
<style>p {font-size:18px}
a {font-size:18px; text-decoration: underline;}
h2 {font-size:28px}
h3 {font-size:24px}
ol {font-size:18px}
ul {font-size:18px}
li {font-size:18px}
</style>
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
	<article>
<?php
echo       $data['isi_artikel'];?><br><br><br><br>
	</article>
	<!-- End of Content -->

	<?php if(isset($total_data)) { ?>
		  	<?php if($total_data > 1) { ?>
		  		<?php if($laman_sekarang > 1) {?>

		  <!-- Pager -->
		  <div class="clearfix">

		  	<a class="btn btn-primary float-left" href="konten?p=<?php echo $laman_sekarang - 1 ?>">&larr; Post Sebelumnya</a>
		  <?php }else { ?>

			<a></a>
  		  <?php } ?>
			<?php if($laman_sekarang < $total_data) {?>

			<a class="btn btn-primary float-right" href="konten?p=<?php echo $laman_sekarang + 1 ?>">Post Selanjutnya &rarr;</a>
		  <?php }else {?>

			<a></a>
			<?php }	?>
			<?php
			  }
			}
			?>

	<!-- Right Bar -->
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="left">


		</div>
	   </div>
      </div>
	</div>
    <hr>


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

  </body>

</html>
