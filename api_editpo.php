<?php

require 'config.php';

$id_order = $_POST['id_order'];
$status_po = $_POST['status_po'];

$send = mysqli_query($koneksi, "UPDATE order_local SET status_po= '$status_po'
                                                       WHERE id_order='$id_order'
                                                                 ");
header("location: data_order.php");
