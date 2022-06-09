<?php 

require 'config.php';

$id_planning=$_POST['id_planning'];
$kegiatan=$_POST['kegiatan'];

$edit = mysqli_query($koneksi, "UPDATE planning SET 
                                                    kegiatan='$kegiatan',
                                                    Where id_planning='$id_planning'");

header("location:data_kegiatan.php");
?>