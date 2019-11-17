<?php
//mengaktifkan session pd php
session_start();


//menghubungkan php dgn koneksi
include 'koneksi.php';

//menangkap data yang d kirim dr from login
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data user dengan username dan password
$login = mysqli_query($koneksi, "SELECT*FROM akses where username='$username' and password='$password'");
//menghitung jml data yg di temukan
$cek = mysqli_num_rows($login);

if($cek>0){
	$data = mysqli_fetch_assoc($login);

	if($data['level']=="admin"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		//alihkan ke halaman dasboard admin
		header("location:halaman_admin.php");

	}else if($data['level']=="petugas"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		//alihkan ke halaman dasboard petugas
		header("location:halaman_petugas");

	}else{
		header("location:index.php?pesan=gagal");
	}
	}else{
		header("location:index.php?pesan=gagal");
	}
?>