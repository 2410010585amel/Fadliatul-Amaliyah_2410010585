<?php
// Mengaktifkan session PHP
session_start();

// Menghubungkan dengan koneksi database
include 'koneksi.php';

// Menangkap data yang dikirim dari form login
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

// Menyeleksi data user dengan username dan password yang sesuai
$query  = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);

// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    // Ambil data user untuk disimpan ke session jika diperlukan
    $data = mysqli_fetch_assoc($result);
    
    // Membuat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['status']   = "login";
    $_SESSION['level']   = $data['level'];
    
    // Alihkan ke halaman home
    header("location:home.php");
} else {
    // Alihkan kembali ke halaman index dengan pesan gagal
    header("location:index.php?pesan=gagal");
}
?>