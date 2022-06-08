<?php

require 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$jabatan = $_POST['jabatan'];
$level = $_POST['level'];

$edit = mysqli_query($koneksi, "UPDATE users SET 
                                                    nama='$nama',
                                                    username='$username',
                                                    jabatan='$jabatan',
                                                    level='$level'
                                                    WHERE id = '$id'
                                                    ") or die (mysqli_error($koneksi));

header("location:data_user.php?");
