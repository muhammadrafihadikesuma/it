<?php

require 'config.php';

$id_daily=$_POST['id_daily'];
$id_author=$_POST['id_author'];
$date=$_POST['date'];
$time=$_POST['time'];
$kegiatan=$_POST['kegiatan'];
$status=$_POST['status'];
$author=$_POST['author'];

$send=mysqli_query($koneksi, "INSERT INTO daily  VALUES('$id_daily',
                                                               '$id_author',
                                                               '$date',
                                                               '$time',
                                                               '$kegiatan',
                                                               '$status',
                                                               '$author'
                                                                 )") or die(mysqli_error($koneksi));

header("location: data_harian.php");