<?php 
include 'config/koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "INSERT INTO tb_masyarakat VALUES ('$nik','$nama','$username', '$password', '$telp')");

header("location:index.php");