<?php

require 'config.php';

$id_order = $_POST['id_order'];
$status_cerf = $_POST['status_cerf'];

$send = mysqli_query($koneksi, "UPDATE order_local SET status_cerf= '$status_cerf'
                                                       WHERE id_order='$id_order'
                                                                 ");
header("location: data_order.php");
