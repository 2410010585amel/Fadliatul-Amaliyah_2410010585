<?php 
// Mengaktifkan session php
session_start();

// Menghapus semua session
session_destroy();

// Mengalihkan halaman sambil mengirim pesan logout (opsional, di sini langsung ke index.php)
header("location:index.php");
exit();
?>