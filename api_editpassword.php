<?php

require 'config.php';

$id = $_POST['id'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$edit = mysqli_query($koneksi, "UPDATE users SET 
                                                    password = '$hashed_password'
                                                    WHERE id = '$id'
                                                    ") or die (mysqli_error($koneksi));

header("location:data_user.php?");
