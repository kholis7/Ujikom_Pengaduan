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
		<center><h4>Laporan Data Masyarakat</h4></center>
		<center><h4>Sistem Informasi Pengaduan Masyarakat</h4></center>
		<center><h4>SMK YAPIIM INDRAMAYU</h4></center>
		<br/>
			<table class="table table-bordered table-striped">
				<tr>
          <th>No</th>
          <th>NIK</th>
          <th>NAMA MASYARAKAT</th>
          <th>USERNAME</th>
          <th>NO. TELP</th>
				</tr>

				<?php
					$data = mysqli_query($koneksi,"SELECT * from tb_masyarakat");
					$no = 1;
					while($d=mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['nik']; ?></td>
							<td><?php echo $d['nama']; ?></td>
							<td><?php echo $d['username']; ?></td>
							<td><?php echo $d['telp']; ?></td>						
						</tr>
						<?php 
					}
					?>
			</table>
		</div>

		<script type="text/javascript">
			window.print();
		</script>

	</body>
	</html>