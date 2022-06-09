<?php 

require "config.php";


$query=mysqli_query($koneksi, "DELETE FROM planning WHERE id_planning='".$_GET['id']."'");

header("location:data_kegiatan.php");
?>