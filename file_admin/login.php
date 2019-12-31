<?php session_start();
ob_start();
include "../koneksi.php"; 
$username = $_POST['username']; 
$pass     = md5($_POST['password']);

$login 	= mysqli_query( $link, "SELECT * FROM admin WHERE username='$username' AND password='$pass'"); 
$ketemu = mysqli_num_rows($login); 
$r 		= mysqli_fetch_array($login); 

if ($ketemu > 0) { 

    $_SESSION[username] = $r[username]; 

    $_SESSION[password] = $r[password]; 

    //$_SESSION[level]	= $r[level]; --aktifkan jika ingin memakai level admin
header('location:admin');
}else{
?><script>alert("Login gagal!");document.location.href="loginadmin?pesan=gagal"</script>
<?php
echo mysqli_error();
}
?>