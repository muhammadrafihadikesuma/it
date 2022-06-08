<?php 

require "config.php";


$query=mysqli_query($koneksi, "DELETE FROM logbook WHERE id_logbook='".$_GET['id']."'");

header("location:data_logbook.php");
?>