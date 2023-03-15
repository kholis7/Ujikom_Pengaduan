<?php 
include "header.php";
?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Laporan Pengaduan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a target="_blank" href="cetak_print.php" class="btn btn-sm btn-primary"><i class="fas fa-print"></i> CETAK</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th width="1%">No</th>
              <th>Id Pengaduan</th>
              <th>Tanggal Tanggapan</th>
              <th>Tanggapan</th>
              <th>Petugas</th>							
              <th>Status</th>							
            </tr>
            </thead>
            <?php
            // mengambil data pelanggan dari database
            $data = mysqli_query($koneksi,"SELECT * from tb_tanggapan
            INNER JOIN tb_pengaduan ON tb_tanggapan.id_pengaduan = tb_pengaduan.id_pengaduan");
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
    </div>
</div>

<?php 
include "footer.php";
?>