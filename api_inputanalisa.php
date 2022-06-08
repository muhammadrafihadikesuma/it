<?php

require 'config.php';

$id_receipt = $_POST['id_receipt'];
$nama_pengirim = $_POST['nama_pengirim'];
$nama_penerima = $_POST['nama_penerima'];
$jabatan = $_POST['jabatan'];
$nama_barang = $_POST['nama_barang'];
$jumlah_unit = $_POST['jumlah_unit'];
$status = $_POST['status'];
$kerusakan = $_POST['kerusakan'];
$id_analysis = $_POST['id_analysis'];
$id_author = $_POST['id_author'];
$divisi = $_POST['divisi'];
$dmg_analysis = $_POST['dmg_analysis'];
$itm_replacement = $_POST['itm_replacement'];
$date_an = $_POST['date_an'];
$author = $_POST['author'];


$edit = mysqli_query($koneksi, "UPDATE receipt SET id_author = '$id_author',
                                                   nama_pengirim='$nama_pengirim',
                                                   nama_penerima='$nama_penerima',
                                                   jabatan='$jabatan',
                                                   nama_barang='$nama_barang',
                                                   jumlah_unit='$jumlah_unit',
                                                   status='$status',
                                                   kerusakan='$kerusakan',
                                                   author='$author'
                                                   WHERE id_receipt='$id_receipt'
                                                    ");

$send = mysqli_query($koneksi, "INSERT INTO analysis VALUES('$id_analysis',
'$id_author',
'$id_receipt',
'$divisi',
'$dmg_analysis',
'$itm_replacement',
'$date_an',
'$author'
  )") or die(mysqli_error($koneksi));




header("location:data_analisa.php?");