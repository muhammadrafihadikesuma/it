<?php

require 'config.php';


$id_logbook=$_POST['id_logbook'];
$id_author=$_POST['id_author'];
$areal=$_POST['areal'];
$date=$_POST['date'];
$kategori=$_POST['kategori'];
$user=$_POST['user'];
$kasus=$_POST['kasus'];
$penyelesaian=$_POST['penyelesaian'];
$keterangan=$_POST['keterangan'];
$author=$_POST['author'];


$send=mysqli_query($koneksi, "INSERT INTO logbook VALUES('$id_logbook',
                                                         '$id_author',
                                                         '$areal',
                                                         '$date',
                                                         '$kategori',
                                                         '$user',
                                                         '$kasus',
                                                         '$penyelesaian',
                                                         '$keterangan',
                                                         '$author'
                                                            )") or die(mysqli_error($koneksi));

header("location:data_logbook.php");
