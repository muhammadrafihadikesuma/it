<?php 

require "config.php";


$query=mysqli_query($koneksi, "DELETE FROM receipt WHERE id_receipt='".$_GET['id']."'");

header("location:data_tandaterima.php?");
?>