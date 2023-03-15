<?php 
include '../config/koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi,"UPDATE tb_masyarakat SET nama='$nama', telp = '$telp', username='$username', password='$password' where nik = '$nik'");

header("location:profile.php");