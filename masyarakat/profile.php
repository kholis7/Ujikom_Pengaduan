<?php
include "header.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <form class="user" method="POST" action="profile_update.php">
              <?php
                $nik = $_SESSION['nik'];
                $data = mysqli_query($koneksi,"SELECT * FROM tb_masyarakat where nik = '$nik'");
                while($dt = mysqli_fetch_array($data)){
              ?>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">NIK</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" name="nik" value="<?= $dt['nik']; ?>" readonly>
                </div>
              </div>
              
              <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">NAMA LENGKAP</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" name="nama" value="<?= $dt['nama']; ?>" readonly>
                </div>
              </div>
              
              <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">NO TELP</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" name="telp" value="<?= $dt['telp']; ?>" >
                </div>
              </div>
              
              <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">USER NAME</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" name="username" value="<?= $dt['username']; ?>" >
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm">PASSWORD</label>
                <div class="col-sm-4">
                  <input type="password" class="form-control form-control-sm" name="password" value="<?= $dt['password']; ?>" >
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label col-form-label-sm"></label>
                <div class="col-sm-4">
                  <a href="pengaduan_tanggapan.php?id_pengaduan=<?=$pengaduan['id_pengaduan'];?>" class="btn btn-info btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-angle-double-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                    </a>
                    <input type="submit" class="btn btn-success btn-sm" value="Update">
                </div>
              </div>

              <?php } ?>
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