<?php

require 'config.php';

$id_item=$_POST['id_item'];
$id_author=$_POST['id_author'];
$nama_pengirim=$_POST['nama_pengirim'];
$nama_penerima=$_POST['nama_penerima'];
$date=$_POST['date'];
$jabatan=$_POST['jabatan'];
$nama_barang=$_POST['nama_barang'];
$jumlah_unit=$_POST['jumlah_unit'];
$author=$_POST['author'];

$send=mysqli_query($koneksi, "INSERT INTO exit_item VALUES('$id_item',
                                                         '$id_author',
                                                         '$nama_pengirim',
                                                         '$nama_penerima',
                                                         '$date',
                                                         '$jabatan',
                                                         '$nama_barang',
                                                         '$jumlah_unit',
                                                         '$author'
                                                            )") or die(mysqli_error($koneksi));

header("location:data_barangkeluar.php");
