<?php
// Memeriksa apakah pengguna sudah login atau belum
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Menampilkan halaman dashboard
echo "<h1>Selamat datang, ".$_SESSION['username']."!</h1>";
echo "<p>Ini adalah halaman dashboard.</p>";
echo "<p><a href='logout.php'>Logout</a></p>";
?>
