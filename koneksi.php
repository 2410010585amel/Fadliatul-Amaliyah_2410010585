<?php
$host     = "localhost";
$username = "root";
$password = "";
$database = "akademik"; // Sesuaikan dengan nama database Anda

$koneksi = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>