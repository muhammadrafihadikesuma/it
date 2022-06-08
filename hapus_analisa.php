<?php

require 'config.php';

$hapus=mysqli_query($koneksi, " DELETE FROM analysis WHERE id_analysis='".$_GET['id']."'");

header("location:data_analisa.php");

?>