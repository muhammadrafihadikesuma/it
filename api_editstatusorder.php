<?php

require 'config.php';

$id_order = $_POST['id_order'];
$status_order = $_POST['status_order'];

$send = mysqli_query($koneksi, "UPDATE order_local SET status_order = '$status_order'
                                                       WHERE id_order='$id_order'
                                                                 ");
header("location: data_order.php");
