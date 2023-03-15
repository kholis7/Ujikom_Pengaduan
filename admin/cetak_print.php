<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Pengaduan Masyarakat - SMK YAPIIM INDRAMAYU</title>

	<!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<style>
		th{
			text-align: center;
		}
	</style>
</head>
<body>
  <?php
  include "../config/koneksi.php";
  session_start();
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
      header("location:../login_admin.php");
  }
  ?>

	<?php 
	// koneksi database
  include "../config/koneksi.php";

	?>
	<div class="container">
		<br>
		<center><h4>Sistem Informasi Pengaduan Masyarakat</h4></center>
		<center><h4>SMK YAPIIM INDRAMAYU</h4></center>
		<br/>
		<?php 
		  if(isset($_GET['dari']) && isset($_GET['sampai'])){
			$dari = $_GET['dari'];
			$sampai = $_GET['sampai'];
			?>
			<h6>Data Laporan Pengaduan dari <b><?php echo $dari; ?></b> sampai <b><?php echo $sampai; ?></b></h6>
			<table class="table table-bordered table-striped">
				<tr>
          <th>No</th>
          <th>Id Pengaduan</th>
          <th>Tanggal Tanggapan</th>
          <th>Tanggapan</th>
          <th>Nama Petugas</th>							
          <th>Status</th>			
				</tr>

				<?php
					$data = mysqli_query($koneksi,"SELECT * from tb_tanggapan
          INNER JOIN tb_pengaduan ON tb_tanggapan.id_pengaduan = tb_pengaduan.id_pengaduan
					INNER JOIN tb_petugas ON tb_tanggapan.id_petugas = tb_petugas.id_petugas
          where date(tgl_tanggapan) > '$dari' and date(tgl_tanggapan) < '$sampai' order by id_tanggapan desc");
					$no = 1;
					while($d=mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['id_pengaduan']; ?></td>
							<td><?php echo $d['tgl_tanggapan']; ?></td>
							<td><?php echo $d['tanggapan']; ?></td>
							<td><?php echo $d['nama_petugas']; ?></td>
							<td>
								<?php 
								if($d['status']=="0"){
									echo "<div class='label label-warning'>0</div>";
								}else if($d['status']=="Proses"){
									echo "<div class='label label-info'>Proses</div>";
								}else if($d['status']=="Selesai"){
									echo "<div class='label label-success'>Selesai</div>";
								}
								?>							
							</td>							
						</tr>
						<?php 
					}
					?>
			</table>			
			<?php } ?>

		</div>

		<script type="text/javascript">
			window.print();
		</script>

	</body>
	</html>