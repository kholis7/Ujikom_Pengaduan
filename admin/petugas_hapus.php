<?php
include "../config/koneksi.php";
$id_petugas = $_GET['id_petugas'];

mysqli_query($koneksi,"DELETE FROM tb_petugas where id_petugas='$id_petugas'");

header("location:petugas_data.php");
?>