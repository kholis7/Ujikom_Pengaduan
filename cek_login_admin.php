<?php
include "config/koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];


$login = mysqli_query($koneksi,"SELECT * from tb_petugas where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);
		if($data["level"]=="admin"){
		session_start();
		$_SESSION['id_petugas'] = $data['id_petugas'];
		$_SESSION['nama_petugas'] = $data['nama_petugas'];
		$_SESSION['level'] = 'admin';
		header("location:admin/index.php");

		}else if($data['level']=='petugas'){
		session_start();
		$_SESSION['id_petugas'] = $data['id_petugas'];
		$_SESSION['nama_petugas'] = $data['nama_petugas'];
		$_SESSION['level'] = 'petugas';
		header("location:petugas/index.php");
	}else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>