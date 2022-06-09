<?php 

require 'config.php';

$id_planning=$_POST['id_planning'];
$date_w=$_POST['date_w'];
$date_f=$_POST['date_f'];
$status=$_POST['status'];

$edit = mysqli_query($koneksi, "UPDATE planning SET date_w='$date_w',
                                                    date_f='$date_f',
                                                    status='$status'
                                                    Where id_planning='$id_planning'");

header("location:data_kegiatan.php");
