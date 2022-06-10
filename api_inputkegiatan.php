<?php

require 'config.php';

$id_planning=$_POST['id_planning'];
$id_author=$_POST['id_author'];
$date=$_POST['date'];
$date_w=$_POST['date_w'];
$date_f=$_POST['date_f'];
$kegiatan=$_POST['kegiatan'];
$status=$_POST['status'];
$author=$_POST['author'];

$send=mysqli_query($koneksi, "INSERT INTO planning VALUES(     '$id_planning',
                                                               '$id_author',
                                                               '$date',
                                                               '$date_w',
                                                               '$date_f',
                                                               '$kegiatan',
                                                               '$status',
                                                               '$author'
                                                                 )") or die(mysqli_error($koneksi));

header("location: data_kegiatan.php");