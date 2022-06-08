<?php 

require "config.php";


$query=mysqli_query($koneksi, "DELETE FROM users WHERE id='".$_GET['id']."'");

header("location:data_user.php?");
?>