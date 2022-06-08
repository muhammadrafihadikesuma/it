<?php

require 'config.php';

$id_order=$_POST['id_order'];
$id_author=$_POST['id_author'];
$date=$_POST['date'];
$nama_barang=$_POST['nama_barang'];
$satuan=$_POST['satuan'];
$divisi=$_POST['divisi'];
$user=$_POST['user'];
$remark=$_POST['remark'];
$status_order=$_POST['status_order'];
$status_cerf = $_POST['status_cerf'];
$status_po=$_POST['status_po'];
$author=$_POST['author'];

$send=mysqli_query($koneksi, "INSERT INTO order_local VALUES('$id_order',
                                                               '$id_author',
                                                               '$date',
                                                               '$nama_barang',
                                                               '$satuan',
                                                               '$divisi',
                                                               '$user',
                                                               '$remark',
                                                               '$status_order',
                                                               '$status_cerf',
                                                               '$status_po',
                                                               '$author'
                                                                 )") or die(mysqli_error($koneksi));

header("location: data_order.php");