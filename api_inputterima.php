<?php

require 'config.php';

$id_receipt=$_POST['id_receipt'];
$id_author=$_POST['id_author'];
$nama_pengirim=$_POST['nama_pengirim'];
$nama_penerima=$_POST['nama_penerima'];
$date=$_POST['date'];
$jabatan=$_POST['jabatan'];
$nama_barang=$_POST['nama_barang'];
$jumlah_unit=$_POST['jumlah_unit'];
$kerusakan=$_POST['kerusakan'];
$status=$_POST['status'];
$author=$_POST['author'];


$send=mysqli_query($koneksi, "INSERT INTO receipt VALUES('$id_receipt',
                                                         '$id_author',
                                                         '$nama_pengirim',
                                                         '$nama_penerima',
                                                         '$date',
                                                         '$jabatan',
                                                         '$nama_barang',
                                                         '$jumlah_unit',
                                                         '$kerusakan',
                                                         '$status',
                                                         '$author'
                                                            )") or die(mysqli_error($koneksi));

header("location:data_tandaterima.php");
