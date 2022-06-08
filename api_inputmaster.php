<?php

require 'config.php';

$id=$_POST['id'];
$divisi=$_POST['divisi'];
$type=$_POST['type'];
$merk=$_POST['merk'];
$tanggalbeli=$_POST['tanggalbeli'];
$user=$_POST['user'];
$mainboard=$_POST['mainboard'];
$processor=$_POST['processor'];
$ram=$_POST['ram'];
$harddisk=$_POST['harddisk'];
$casing=$_POST['casing'];
$windowse=$_POST['windowse'];
$windowsv=$_POST['windowsv'];
$licensespc=$_POST['licensespc'];
$office=$_POST['office'];
$licensesof=$_POST['licensesof'];
$spesifikasi=$_POST['spesifikasi'];
$status=$_POST['status'];
$age=$_POST['age'];
$ups=$_POST['ups'];
$printer=$_POST['printer'];

$send=mysqli_query($koneksi, "INSERT INTO masters VALUES('$id',
                                                         '$divisi',
                                                         '$type',
                                                         '$merk',
                                                         '$tanggalbeli',
                                                         '$user',
                                                         '$mainboard',
                                                         '$processor',
                                                         '$ram',
                                                         '$harddisk',
                                                         '$casing',
                                                         '$windowse',
                                                         '$windowsv',
                                                         '$licensespc',
                                                         '$office',
                                                         '$licensesof',
                                                         '$spesifikasi',
                                                         '$status',
                                                         '$age',
                                                         '$ups',
                                                         '$printer'
                                                            )") or die(mysqli_error($koneksi));

header("location:tables_master.php");
