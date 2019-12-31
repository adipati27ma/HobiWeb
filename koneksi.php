<?php  


$host= "localhost";  

$username = "root";   

$password = "";   

$database = "website";  

  

$link = mysqli_connect($host,$username,$password, $database);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 

?>