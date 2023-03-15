<?php
include "header.php";

?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID TANGGAPAN</th>
              <th>ID PENGADUAN</th>
              <th>TGL TANGGAPAN</th>
              <th>TANGGAPAN</th>
              <th>STATUS</th>
              <th>PETUGAS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <?php 
              $nik = $_SESSION['nik'];
              $dt_pengaduan = mysqli_query($koneksi,"SELECT * FROM tb_tanggapan
              INNER JOIN tb_pengaduan ON tb_tanggapan.id_pengaduan = tb_pengaduan.id_pengaduan
              INNER JOIN tb_petugas ON tb_tanggapan.id_petugas = tb_petugas.id_petugas
              where nik = '$nik'
              ");
              $no = 1;
              while ($pengaduan=mysqli_fetch_array($dt_pengaduan)){
            ?>
              <td align="center"><?php echo $no++; ?></td>
              <td align="center"><?php echo $pengaduan['id_tanggapan']; ?></td>
              <td align="center"><?php echo $pengaduan['id_pengaduan']; ?></td>
              <td align="center"><?php echo $pengaduan['tgl_tanggapan']; ?></td>
              <td><?php echo $pengaduan['tanggapan']; ?></td>
              <td align="center"><?php echo $pengaduan['status']; ?></td>
              <td><?php echo $pengaduan['nama_petugas']; ?></td>
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