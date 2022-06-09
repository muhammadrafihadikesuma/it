<?php 

require 'config.php';

$id_daily=$_POST['id_daily'];
$status=$_POST['status'];

$edit = mysqli_query($koneksi, "UPDATE daily SET 
                                                    status='$status'
                                                    Where id_daily='$id_daily'");

header("location:data_harian.php");
