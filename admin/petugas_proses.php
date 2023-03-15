<?php
include "../config/koneksi.php";

$nama = $_POST ['nama'];
$username = $_POST ['username'];
$password = $_POST ['password'];
$telp = $_POST ['telp'];
$level = 'petugas';


mysqli_query($koneksi,"INSERT INTO tb_petugas VALUES ('', '$nama', '$username', '$password', '$telp', '$level')");

header("location:petugas_data.php");
?>