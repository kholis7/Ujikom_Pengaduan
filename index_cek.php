<?php
session_start();
include "config/koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * from tb_masyarakat where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);


if($cek > 0){
	$data = mysqli_fetch_array($login);
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['nik'] = $data['nik'];
	$_SESSION['status'] = "login";
	header("location:masyarakat/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>