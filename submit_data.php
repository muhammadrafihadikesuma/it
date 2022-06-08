<?php 
require"config.php";

$divisi =$_POST['divisi'];
$type =$_POST['type'];
$merk =$_POST['merk'];
$tgl_beli =$_POST['tgl_beli'];
$user =$_POST['user'];
$mainboard =$_POST['mainboard'];
$processor =$_POST['processor'];
$ram =$_POST['ram'];
$harddisk =$_POST['harddisk'];
$casing =$_POST['casing'];
$wdw_edition =$_POST['wdw_edition'];
$wdw_version =$_POST['wdw_version'];
$licenses_pc =$_POST['licenses_pc'];
$office =$_POST['office'];
$licenses_office =$_POST['licenses_office'];
$other_spec =$_POST['other_spec'];
$status =$_POST['status'];
$age =$_POST['age'];
$ups =$_POST['ups'];
$printer =$_POST['printer'];

$send=mysqli_query($koneksi, "INSERT INTO masters 
                             VALUES (
                            '',
                            '$divisi',
                            '$type',
                            '$merk',
                            '$tgl_beli',
                            '$user',
                            '$mainboard',
                            '$processor',
                            '$ram',
                            '$harddisk',
                            '$casing',
                            '$wdw_edition',
                            '$wdw_version',
                            '$licenses_pc',
                            '$office',
                            '$licenses_office',
                            '$other_spec',
                            '$status',
                            '$age',
                            '$ups',
                            '$printer'
                             )"
                             );

?>