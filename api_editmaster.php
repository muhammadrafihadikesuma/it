<?php

require "config.php";

$id=$_POST['id'];
$divisi =$_POST['divisi'];
$type =$_POST['type'];
$merk =$_POST['merk'];
$tgl_beli =$_POST['tanggalbeli'];
$user =$_POST['user'];
$mainboard =$_POST['mainboard'];
$processor =$_POST['processor'];
$ram =$_POST['ram'];
$harddisk =$_POST['harddisk'];
$casing =$_POST['casing'];
$wdw_edition =$_POST['windowse'];
$wdw_version =$_POST['windowsv'];
$licenses_pc =$_POST['licensespc'];
$office =$_POST['office'];
$licenses_office =$_POST['licensesof'];
$other_spec =$_POST['spesifikasi'];
$status =$_POST['status'];
$age =$_POST['age'];
$ups =$_POST['ups'];
$printer =$_POST['printer'];


	$send=mysqli_query($koneksi, "UPDATE masters SET
                            divisi='$divisi',
                            type='$type',
                            merk='$merk',
                            tgl_beli='$tgl_beli',
                            user='$user',
                            mainboard='$mainboard',
                            processor='$processor',
                            ram='$ram',
                            harddisk='$harddisk',
                            casing='$casing',
                            wdw_edition='$wdw_edition',
                            wdw_version='$wdw_version',
                            licenses_pc='$licenses_pc',
                            office='$office',
                            licenses_office='$licenses_office',
                            other_spec='$other_spec',
                            status='$status',
                            age='$age',
                            ups='$ups',
                            printer='$printer'
                            WHERE id_master='$id'");


header("location:tables_master.php?");
?>
