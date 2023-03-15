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
                <a href="#" data-toggle="modal" data-target="#logoutModal"><h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6></a>
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