<html><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>    <!-- Custom styles for this template -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">

	<!-- Calendar CSS -->
    <link href="../calendar.css" rel="stylesheet">
	<!-- Login CSS W3Schools -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  </head>
<style type="text/css">
<!--
.judul {
 background-color: #226ee8;
}
body {
background:url(../img/login-bg.jpg)
}
-->
</style>
<body>
<?php 
	$page = "loginadmin";
	
	
				if(isset($_GET['pesan'])){
					if($_GET['pesan'] == "gagal"){
						echo ' <div class="container">
			 <div class="row"> <div class="col-ld-4">
			<div class="alert alert-warning">
			  <strong>Login gagal</strong><br> Username dan Password salah!
			</div></div></div></div>
			  </div>';
					}else if($_GET['pesan'] == "logout"){
						echo ' <div class="container">
			 <div class="row"> <div class="col-ld-4">
			<div class="alert alert-success">
			  Anda telah logout
			</div></div></div></div>
			  </div>';
					}else if($_GET['pesan'] == "belum_login"){
						echo ' <div class="container">
			 <div class="row"> <div class="col-ld-4">
			<div class="alert alert-danger">
			  Anda harus login jika ingin mengakses halaman admin!
			</div></div></div></div>
			  </div>';
					}
				}
				?>
<style type="text/css">

.style2 {color: #166D12}
.btn-gray{background-color:#dddddd;border-color:#dddddd}
.btn-gray:active,.btn-primary:focus,
.btn-gray:hover{color:#fff;background-color:#777777!important;border-color:#777777!important
}
a { 
text-decoration:none
}
</style>
<div align="center">
  <p>&nbsp;</p>
<a href="../index"><button class="btn btn-gray float-left" style="color:#FFFFFF">Ke halaman utama</button></a>
<br /><br /><br>

		<div class="container">
			<div class="row"> <div class="col-lg-4"></div>
			 <div class="col-lg-4">
				<div class="panel panel-primary">
						<div class="panel-head"><h4><strong>LOGIN ADMIN</strong></h4></div>
					  <form method="post" action="login">
						  <div class="row">
						  <div class="col-lg-2"></div>
						  <div class="col-lg-8">
						<div class="panel-body">Username</div>
							<input type="text" class="form-control" name="username" />
						  </div>
						  </div>
						   <div class="row">
						  <div class="col-lg-2"></div>
						  <div class="col-lg-8">
						<div class="panel-body">Password</div>
							<input type="password" class="form-control" name="password" />
						  </div>
						  </div>
						  <br>
						  <input class="btn btn-info" type="submit" name="Submit" value="Login" /> 
						  <input class="btn btn-info" name="reset" type="reset" value="Reset" />
					  </form>
				</div>
			  </div>
			</div>
		</div>
  
  
</div>
</body>


<!-- Footer -->
     <footer>
	 <br><br><br><br><br><br><br><hr>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://twitter.com/adi_loc30" title="Find me on Twitter" target="_blank">
                  <br><span class="fa-stack fa-lg">
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
            <p class="copyright text-muted"><br>Copyright &copy; A-Tech 2019</p>
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
