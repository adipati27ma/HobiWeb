<?php
if (!isset($_SESSION)) {
session_start();
}
if(isset($_SESSION['username'])){
}
else{
          
            header("location:../file_admin/loginadmin?pesan=belum_login");
}
?>