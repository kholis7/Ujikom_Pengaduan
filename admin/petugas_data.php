<?php
include "header.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Data Petugas</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="#" data-toggle="modal" data-target="#tpetugasModal"><h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6></a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>NO</th>
              <th>ID PETUGAS</th>
              <th>NAMA PETUGAS</th>
              <th>USERNAME</th>
              <th>NO. TELP</th>
              <th>LEVEL</th>
              <th>OPSI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <?php 
              $dt_petugas = mysqli_query($koneksi,"SELECT * FROM tb_petugas
              where level='petugas'");
              $no = 1;
              while ($petugas=mysqli_fetch_array($dt_petugas)){
            ?>
              <td><?php echo $no++; ?></td>
              <td><?php echo $petugas['id_petugas']; ?></td>
              <td><?php echo $petugas['nama_petugas']; ?></td>
              <td><?php echo $petugas['username']; ?></td>
              <td><?php echo $petugas['telp']; ?></td>
              <td><?php echo $petugas['level']; ?></td>
              <td>
                <a href="#" data-toggle="modal" data-target="#epetugasModal<?php echo $petugas['id_petugas']; ?>" class="btn btn-sm btn-primary">Edit</a>
                <a href="petugas_hapus.php?id_petugas=<?php echo $petugas ['id_petugas']; ?>" class="btn btn-sm btn-danger">Hapus</a>
              </td>
            </tr>
            <!-- Edit Petugas -->
            <div class="modal fade" id="epetugasModal<?php echo $petugas['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Edit Data Petugas</h6>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="petugas_proses.php">
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Nama Petugas</label>
                          <div class="col-sm-8">
                              <input type="text" name="nama" class="form-control" value="<?php echo $petugas['nama_petugas']; ?>" placeholder="Masukan Nama Petugas">
                              <input type="hidden" name="id_petugas" class="form-control" value="<?php echo $petugas['id_petugas']; ?>" placeholder="Masukan Nama Petugas">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Username Petugas</label>
                          <div class="col-sm-8">
                              <input type="text" name="username" class="form-control"  value="<?php echo $petugas['username']; ?>"placeholder="Masukan Username Petugas">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Password Petugas</label>
                          <div class="col-sm-8">
                              <input type="password" name="password" class="form-control" value="<?php echo $petugas['password']; ?>" placeholder="Masukan Password Petugas">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label">No. Telp Petugas</label>
                          <div class="col-sm-8">
                              <input type="number" name="telp" class="form-control" value="<?php echo $petugas['telp']; ?>" placeholder="Masukan No. Telp Petugas">
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Cancel</button>
                      <input type="submit" class="btn btn-success btn-sm" value="Update">
                  </div>
                  </form>
                </div>
              </div>
            </div>
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