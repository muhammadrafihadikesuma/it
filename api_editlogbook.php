<?php

require 'config.php';

$id_logbook = $_POST['id_logbook'];
$areal = $_POST['areal'];
$date = $_POST['date'];
$kategori = $_POST['kategori'];
$user = $_POST['user'];
$kasus = $_POST['kasus'];
$penyelesaian = $_POST['penyelesaian'];
$keterangan = $_POST['keterangan'];

$edit = mysqli_query($koneksi, "UPDATE logbook SET  areal='$areal',
                                                    date='$date',
                                                    kategori='$kategori',
                                                    user='$user',
                                                    kasus='$kasus',
                                                    penyelesaian='$penyelesaian',
                                                    keterangan='$keterangan'
                                                    WHERE id_logbook ='$id_logbook'");

header("location:data_logbook.php");