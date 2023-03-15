<?php 
include '../config/koneksi.php';
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$file = $_FILES['foto']['tmp_name'];
$status = 0;

mysqli_query($koneksi, "INSERT INTO tb_pengaduan VALUES ('','$tgl_pengaduan','$nik','$isi_laporan','$foto', '$status')");

move_uploaded_file($file,"../img/".$foto);

header("location:index.php");