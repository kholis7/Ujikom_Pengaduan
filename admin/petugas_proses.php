<?php
include "../config/koneksi.php";

$id_petugas = $_POST ['id_petugas'];
$nama = $_POST ['nama'];
$username = $_POST ['username'];
$password = $_POST ['password'];
$telp = $_POST ['telp'];
$level = 'petugas';


mysqli_query($koneksi,"UPDATE tb_petugas SET nama_petugas='$nama', username='$username', password='$password', telp='$telp', level='$level' 
where id_petugas = '$id_petugas'");

header("location:petugas_data.php");
?>