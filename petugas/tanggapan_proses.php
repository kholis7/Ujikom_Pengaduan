<?php
include "../config/koneksi.php";

//tanggapan
$id_pengaduan = $_POST['id_pengaduan'];
$tgl_tanggapan = date('Y-m-d');
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];

//pengaduan
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_POST['foto'];
$status = $_POST['status'];


mysqli_query($koneksi,"UPDATE tb_pengaduan SET tgl_pengaduan='$tgl_pengaduan', nik='$nik', isi_laporan='$isi_laporan', foto='$foto', status='Selesai' 
where id_pengaduan = '$id_pengaduan'");


mysqli_query($koneksi,"INSERT INTO tb_tanggapan VALUES ('','$id_pengaduan','$tgl_tanggapan','$tanggapan','$id_petugas')");

header("location:pengaduan_tanggapan.php");
?>