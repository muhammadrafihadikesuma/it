<?php 

require "config.php";


$query=mysqli_query($koneksi, "DELETE FROM exit_item WHERE id_item='".$_GET['id']."'");

header("location:data_barangkeluar.php?");
?>