<?php
$koneksi = mysqli_connect("localhost","root","","conten");
//cek koneksi
if(mysqli_connect_errno()){
	echo "koneksi database gagal :" . mysqli_connect_error();
}
?>