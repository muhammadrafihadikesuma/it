<?php

require 'config.php';

$id_receipt = $_POST['id_receipt'];
$id_author = $_POST['id_author'];
$nama_pengirim = $_POST['nama_pengirim'];
$nama_penerima = $_POST['nama_penerima'];
$jabatan = $_POST['jabatan'];
$nama_barang = $_POST['nama_barang'];
$jumlah_unit = $_POST['jumlah_unit'];
$kerusakan = $_POST['kerusakan'];
$author = $_POST['author'];


$edit = mysqli_query($koneksi, "UPDATE receipt SET id_author = '$id_author',
                                                   nama_pengirim='$nama_pengirim',
                                                   nama_penerima='$nama_penerima',
                                                   jabatan='$jabatan',
                                                   nama_barang='$nama_barang',
                                                   jumlah_unit='$jumlah_unit',
                                                   kerusakan='$kerusakan',
                                                   author='$author'
                                                   WHERE id_receipt='$id_receipt'
                                                    ");

header("location:data_tandaterima.php?");
