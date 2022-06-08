<?php

require 'config.php';

$id_analysis=$_POST['id_analysis'];
$id_receipt=$_POST['id_receipt'];
$divisi=$_POST['divisi'];
$dmg_analysis=$_POST['dmg_analysis'];
$itm_replacement=$_POST['itm_replacement'];
$date=$_POST['date'];

$edit = mysqli_query($koneksi, "UPDATE analysis SET 
                                                    id_receipt='$id_receipt',
                                                    divisi='$divisi',
                                                    dmg_analysis='$dmg_analysis',
                                                    itm_replacement='$itm_replacement',
                                                    date='$date'
                                                    WHERE id_analysis='$id_analysis'
                                                    ");

header("location:data_analisa.php");
