<?php include 'header.php'; ?>
<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Filter Laporan</h4>
		</div>
		<div class="panel-body">		
			<form action="laporan_pengaduan.php" method="get">
				<table class="table table-bordered table-striped">
					<tr>				
						<th>Dari Tanggal</th>
						<th>Sampai Tanggal</th>							
						<th width="1%"></th>
					</tr>
					<tr>
						<td>
							<br/>
							<input type="date" name="tgl_dari" class="form-control">
						</td>
						<td>
							<br/>
							<input type="date" name="tgl_sampai" class="form-control">
							<br/>
						</td>
						<td>
							<br/>
							<input type="submit" class="btn btn-primary" value="Filter">
						</td>
					</tr>

				</table>
			</form>
			
		</div>
	</div>

	<br/>

	<?php 
	if(isset($_GET['tgl_dari']) && isset($_GET['tgl_sampai'])){
		$dari = $_GET['tgl_dari'];
		$sampai = $_GET['tgl_sampai'];
		?>
		<div class="panel">
			<div class="panel-heading">
				<h6>Data Laporan Pengaduan Masyarakat dari <b><?php echo $dari; ?></b> sampai <b><?php echo $sampai; ?></b></h6>
			</div>
			<div class="panel-body">			

				<a target="_blank" href="cetak_print.php?dari=<?php echo $dari; ?>&sampai=<?php echo $sampai; ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-print"></i> CETAK</a>
				<br/>
				<br/>
				<table class="table table-bordered table-striped">
					<tr>
						<th width="1%">No</th>
						<th>Id Pengaduan</th>
						<th>Tanggal Tanggapan</th>
						<th>Tanggapan</th>
						<th>Petugas</th>							
						<th>Status</th>							
					</tr>

					<?php
					// mengambil data pelanggan dari database
					$data = mysqli_query($koneksi,"SELECT * from tb_tanggapan
          INNER JOIN tb_pengaduan ON tb_tanggapan.id_pengaduan = tb_pengaduan.id_pengaduan
          where date(tgl_tanggapan) > '$dari' and date(tgl_tanggapan) < '$sampai' order by id_tanggapan desc");
					$no = 1;
					// mengubah data ke array dan menampilkannya dengan perulangan while
					while($d=mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['id_pengaduan']; ?></td>
							<td><?php echo $d['tgl_tanggapan']; ?></td>
							<td><?php echo $d['tanggapan']; ?></td>
							<td><?php echo $d['id_petugas']; ?></td>
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
			</div>
		</div>
		<?php } ?>

	</div>

	<?php include 'footer.php'; ?>