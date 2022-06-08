<?php

require 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$jabatan = $_POST['jabatan'];
$level = $_POST['level'];

$cek_username = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'"));

if ($cek_username > 0) {
    # code...
    echo '<script> 
    alert ("Username Telah Digunakan, Harap Menggunakan Username Yang Berbeda..!!");
	window.location.href="input_user.php";
    </script>';
} else{

$send = mysqli_query($koneksi, "INSERT INTO users VALUES('$id',
                                                 '$nama',
                                                 '$username',
                                                 '$hashed_password',
                                                 '$jabatan',
                                                 '$level'
                                                )") or die(mysqli_error($koneksi));
header("location:data_user.php");
}
