<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// cek apakah username dan password benar
	if ($username === 'admin' && $password === 'admin123') {
		$_SESSION['username'] = $username;
		header('Location: dashboard.php');
		exit;
	} else {
		$error = 'Username atau password salah';
	}
}
?>
