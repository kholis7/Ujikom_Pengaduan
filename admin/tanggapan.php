<?php
include "header.php";

?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="row">
    <div class="col-lg-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Pengaduan</h6>
        </div>
        <div class="card-body">
          <form method="POST" action="tanggapan_proses.php">
          <?php
            $id_pengaduan = $_GET['id_pengaduan'];
            $dt_pengaduan = mysqli_query($koneksi,"SELECT * FROM tb_pengaduan where id_pengaduan=$id_pengaduan
            ");
            while ($pengaduan=mysqli_fetch_array($dt_pengaduan)){
          ?>  
          <div class="form-group">
            <label for="">Tanggal Pengaduan</label>
              <input type="hidden" class="form-control" name="id_pengaduan" value="<?php echo $pengaduan['id_pengaduan']; ?>">
              <input type="date" class="form-control" name="tgl_pengaduan" value="<?php echo $pengaduan['tgl_pengaduan']; ?>" readonly>
              <input type="hidden" class="form-control" name="nik" value="<?php echo $pengaduan['nik']; ?>">
            </div>

            <div class="form-group">
              <label>Isi Laporan</label>
                <textarea name="isi_laporan" rows="4" class="form-control" readonly> <?php echo $pengaduan['isi_laporan']; ?></textarea>
            </div>

            <div class="form-group">
              <label for="">Bukti Foto</label>
              <input type="hidden" class="form-control-file" name="foto" value="<?php echo $pengaduan['foto']; ?>">
            </div>
            <div class="form-group">
              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 12rem;" src="../img/<?php echo $pengaduan['foto']; ?>">
            </div>
            <?php } ?>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tanggapan</h6>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label>Tanggal Tanggapan</label>
            <input type="date" class="form-control" name="tgl_tanggapan" value="<?= date('Y-m-d'); ?>" readonly>
          </div>

          <div class="form-group">
            <label for="">Tanggapan</label>
            <textarea name="tanggapan" rows="4" class="form-control"> </textarea>
          </div>

          <div class="form-group">
            <label>Petugas</label>
              <input type="text" name="id_petugas" class="form-control" value="<?php echo $_SESSION['id_petugas']; ?>">
          </div>

          <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
              <option value="Proses">Proses</option>
              <option value="Selesai">Selesai</option>
            </select>
          </div>

          <hr>

          <div class="form-group">
            <a href="pengaduan_tanggapan.php" class="btn btn-info btn-icon-split btn-sm">
              <span class="icon text-white-50">
                <i class="fas fa-angle-double-left"></i>
              </span>
              <span class="text">Kembali</span>
            </a>
            <input type="submit" class="btn btn-danger btn-sm" value="Tanggapi">
          </div>
        </div>
      </div>
    </div>
      </form>
  </div>
</div>
<!-- /.container-fluid -->
<?php
include "footer.php";
?>