<?php
include "header.php";

?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <form class="user" method="POST" action="pengaduan_proses.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tanggal Pengaduan</label>
                  <input type="text" class="form-control" name="tgl_pengaduan" value="<?= date('Y-m-d'); ?>" readonly>
              </div>
              <div class="form-group">
                  <input type="hidden" class="form-control" name="nik" value="<?= $_SESSION['nik']; ?>">
              </div>
              <div class="form-group">
                <label for="">Isi Laporan</label>
                  <textarea name="isi_laporan" rows="5" class="form-control" ></textarea>
              </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Bukti Foto</label>
                <input type="file" class="form-control-file" name="foto" required="required">
                <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg </p>
            </div>
            <div class="form-group">
              <a href="pengaduan_verifikasi.php" class="btn btn-info btn-icon-split btn-sm">
                <span class="icon text-white-50">
                  <i class="fas fa-angle-double-left"></i>
                </span>
                <span class="text">Kembali</span>
              </a>
              <input type="submit" class="btn btn-danger btn-sm" value="Simpan">
              </input>
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