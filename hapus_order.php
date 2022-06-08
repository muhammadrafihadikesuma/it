<?php 

require "config.php";


$query=mysqli_query($koneksi, "DELETE FROM order_local WHERE id_order='".$_GET['id']."'");

header("location:data_order.php?");
?>