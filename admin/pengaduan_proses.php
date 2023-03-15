<?php
include "../config/koneksi.php";

$id_pengaduan = $_POST['id_pengaduan'];
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_POST['foto'];

mysqli_query($koneksi,"UPDATE tb_pengaduan SET tgl_pengaduan='$tgl_pengaduan', nik = '$nik', isi_laporan='$isi_laporan', foto='$foto', status='Proses'
WHERE id_pengaduan = '$id_pengaduan'");

header("location:pengaduan_verifikasi.php");
?>