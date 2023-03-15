<?php
include "header.php";

?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h6>
    </div>
    <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <form class="user" method="POST" action="pengaduan_proses.php">
            <?php
              $id_pengaduan = $_GET['id_pengaduan'];
              $dt_pengaduan = mysqli_query($koneksi,"SELECT * FROM tb_pengaduan where id_pengaduan=$id_pengaduan
              ");
              while ($pengaduan=mysqli_fetch_array($dt_pengaduan)){
            ?>  
            <div class="form-group">
                <label for="">Tanggal Pengaduan</label>
                  <input type="hidden" class="form-control" name="id_pengaduan" value="<?php echo $pengaduan['id_pengaduan']; ?>">
                  <input type="hidden" class="form-control" name="nik" value="<?php echo $pengaduan['nik']; ?>">
                  <input type="hidden" class="form-control" name="status" value="<?php echo $pengaduan['status']; ?>">
                  <input type="date" class="form-control" name="tgl_pengaduan" value="<?php echo $pengaduan['tgl_pengaduan']; ?>" readonly>
              </div>
              <div class="form-group">
                <label for="">Isi Laporan</label>
                  <textarea name="isi_laporan" rows="5" class="form-control" readonly> <?php echo $pengaduan['isi_laporan']; ?></textarea>
              </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Bukti Foto</label>
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 17rem;" src="../img/<?php echo $pengaduan['foto']; ?>">
            </div>
            <?php } ?>
            <div class="form-group">
              <a href="pengaduan_tanggapan.php" class="btn btn-info btn-icon-split btn-sm">
                <span class="icon text-white-50">
                  <i class="fas fa-angle-double-left"></i>
                </span>
                <span class="text">Kembali</span>
              </a>
            </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
<?php
include "footer.php";
?>