<?php
// file koneksi antara web dengan db

$servername = "localhost";
$username =  "root";
$password = "";
$dbname = "mahasiswa";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
 // Periksa koneksi
 if($conn->connect_error){
    die("koneksi gagal : ".$conn->connect_error);
 }

?>