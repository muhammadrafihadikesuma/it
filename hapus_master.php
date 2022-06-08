<?php 

require "config.php";


$query=mysqli_query($koneksi, "DELETE FROM masters WHERE id_master='".$_GET['id']."'");

header("location:tables_master.php?");
?>