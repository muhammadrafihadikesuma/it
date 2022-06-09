<?php 

require "config.php";


$query=mysqli_query($koneksi, "DELETE FROM daily WHERE id_daily='".$_GET['id']."'");

header("location:data_harian.php");
?>