<?php 

include 'config.php';

$id_item=$_POST['id_item'];
$nama_pengirim=$_POST['nama_pengirim'];
$nama_penerima=$_POST['nama_penerima'];
$date=$_POST['date'];
$jabatan=$_POST['jabatan'];
$nama_barang=$_POST['nama_barang'];
$jumlah_unit=$_POST['jumlah_unit'];


$edit = mysqli_query($koneksi, "UPDATE exit_item SET 
                                                    nama_pengirim='$nama_pengirim',
                                                    nama_penerima='$nama_penerima',
                                                    date='$date',
                                                    jabatan='$jabatan',
                                                    nama_barang='$nama_barang',
                                                    jumlah_unit='$jumlah_unit'
                                                    Where id_item='$id_item'");

header("location:data_barangkeluar.php");
?>