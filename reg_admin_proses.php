<?php 
include 'config/koneksi.php';
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = "admin";

mysqli_query($koneksi, "INSERT INTO tb_petugas VALUES ('','$nama','$username', '$password', '$telp','$level')");

header("location:login_admin.php");