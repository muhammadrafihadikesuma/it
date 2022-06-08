<?php


$host="localhost";
$user="root";
$pass="";
$database="sys_it";

$koneksi=mysqli_connect($host,$user,$pass,$database);
	if (mysqli_connect_errno()) {
	  trigger_error('Failed To Connected Database: '  . mysqli_connect_error(), E_USER_ERROR); 
	}
?>