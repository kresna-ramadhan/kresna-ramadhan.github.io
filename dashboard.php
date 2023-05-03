<?php
session_start();

// cek apakah pengguna sudah login atau belum
if (!isset($_SESSION['username'])) {
	header('Location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Selamat datang, <?php echo $_SESSION['username']; ?></h2>
	<p>Ini adalah halaman dashboard Anda.</p>
	<a href="logout.php">Logout</a>
</body>
</html>
