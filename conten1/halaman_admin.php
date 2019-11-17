<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<?php
	session_start();
	//cek apakah yg mengakses hal ini sudah login
	if($_SESSION['level']==""){
		header("localhost:index.php?pesan=gagal");
	} 

	?>

		<h1>Halaman Admin</h1>
		<p>Hallo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b></p>

		<a href="logout.php">LOGOUT</a>
		<br>
		<br>


</body>
</html>