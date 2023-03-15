<?php
include "header.php";

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Masyarakat</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
				<a target="_blank" href="masyarakat_print.php" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-print"></i> CETAK</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>NAMA MASYARAKAT</th>
                <th>USERNAME</th>
                <th>NO. TELP</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php 
                $dt_petugas = mysqli_query($koneksi,"SELECT * FROM tb_masyarakat
                ");
                $no = 1;
                while ($petugas=mysqli_fetch_array($dt_petugas)){
              ?>
                <td align="center"><?php echo $no++; ?></td>
                <td><?php echo $petugas['nik']; ?></td>
                <td><?php echo $petugas['nama']; ?></td>
                <td><?php echo $petugas['username']; ?></td>
                <td><?php echo $petugas['telp']; ?></td>
              </tr>
              <?php
                }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<!-- /.container-fluid -->
<?php
include "footer.php";
?>