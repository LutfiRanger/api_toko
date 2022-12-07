<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "toko_api";

$connect = mysqli_connect($servername, $username, $password, $databasename);
// script cek koneksi   
if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}

?>