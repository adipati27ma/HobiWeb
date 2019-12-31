<?php
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A-Tech - About</title>

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
    <header class="masthead" style="background-image: url('img/SplitShire-Comp.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>About Me</h1>
              <p class="subheading">Asal-usul web dan tentang saya</p>
              <p class="subheading">&nbsp;</p>
              <p class="subheading">&nbsp;</p>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    
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
		
		<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <p>Hallo sobat semua, nama lengkap saya Adipati Ma'ruf Alamsyah dan saya merupakan mahasiswa di Universitas Padjadjaran yang berada di Sumedang. Saya berkuliah di jurusan Teknik Elektro angkatan 2017.</p><p>Sekilas cerita saya tentang kehidupan di kampus. Sebelum masuk perkuliahan saya sangat ingin ikut berkontribusi dalam BEM Fakultas dan Himpunan yang ada, tetapi di sisi lain saya mempunyai tanggung jawab sebagai mahasiswa japres pula dan ikut turut membangun salah satu UKM di Unpad dan merupakan UKM Marching Band-nya Unpad, yaitu SPDC (Sadaluhung Padjadjaran Drum Corps). Maka dari itu, saya kurang mampu untuk memberikan kontribusi yang maksimal di BEM Fakultas dan Himpunan tetapi saya tetap melakukan segala kontribusi yang bisa saya lakukan semaksimal mungkin dengan membagi waktu yang ada se-efektif mungkin.
		  </p>
		  
		  <p>Motivasi saya membuat website ini sebetulnya hanya untuk mengasah dan mempelajari kemampuan web programming. Dari dulu saya sangat ingin belajar web programming sejak kelas 10 SMK karena di salah satu mata pelajarannya ada mapel "Web Program". Sebenarnya, sejak dari SD saya ingin belajar web programming karena saya suka mengetik coding/kode. Maka dari itu, mumpung sekarang (Desember 2018 s/d Februari 2019) saya sedang libur kuliah, saya ingin menghabiskan waktu luang untuk mempelajari dan membuat website sendiri dengan kode yang saya tulis sendiri sekaligus ingin berbagi berbagai macam ilmu tentang teknologi dan komputer yang pernah saya ketahui selama ini.
		  </p>
		  
		  <p> Saya harap para pembaca di sini juga jadi ikut termotivasi untuk belajar lebih giat lagi dan tidak pantang menyerah. Semoga artikel-artikel yang saya buat dan informasi yang saya berikan dapat bermanfaat bagi para pembacanya. Aamiinn.
		  </p>
		  
      </div>
    </div>
		<!-- Right Bar -->
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" align="left">
		
		
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
