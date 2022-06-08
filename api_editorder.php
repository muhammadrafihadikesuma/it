<?php

require 'config.php';

$id_order = $_POST['id_order'];
$date = $_POST['date'];
$nama_barang = $_POST['nama_barang'];
$satuan = $_POST['satuan'];
$divisi = $_POST['divisi'];
$user = $_POST['user'];
$remark = $_POST['remark'];

$send = mysqli_query($koneksi, "UPDATE order_local SET date='$date',
                                                       nama_barang='$nama_barang',
                                                       satuan='$satuan',
                                                       divisi='$divisi',
                                                       user='$user',
                                                       remark='$remark'
                                                       WHERE id_order='$id_order'
                                                                 ");
header("location: data_order.php");
