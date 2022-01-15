<?php

$server = "localhost";
$username ="root";
$password = "";
$database = "22_mywebsite_12rpl2";

$koneksi = mysqli_connect($server,$username,$password,$database);

if (!$koneksi) {
    die("gagal koneksi<br>".mysqli_connect_error()."<br>".mysqli_connect_errno());
}else{
   // echo "koneksi berhasil";
}
?>