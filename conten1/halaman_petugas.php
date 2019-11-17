<!DOCTYPE html>
<html>
<head>
	<title>Halaman Petugas</title>
</head>
<body>
	<?php
	session_start();

	if ($_SESSION['level']=="") {
		header("localhost:index.php?pesan=gagal");
	} 

	?>

		<h1>Halaman Petugas</h1>
		<p>Hallo <b><?php echo $_SESSION['username']; ?></b>Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b></p>

		<a href="logout.php">LOGOUT</a>
		<br>
		<br>


</body>
</html>