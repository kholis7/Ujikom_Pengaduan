<?php
include "header.php";

?>
<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tanggapan Pengaduan</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>TANGGAL LAPORAN</th>
                        <th>NIK</th>
                        <th>ISI LAPORAN</th>
                        <th>FOTO</th>
                        <th>STATUS</th>
                        <th>OPSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <?php 
                        $dt_pengaduan = mysqli_query($koneksi,"SELECT * FROM tb_pengaduan where status='proses'
                        ");
                        $no = 1;
                        while ($pengaduan=mysqli_fetch_array($dt_pengaduan)){
                      ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $pengaduan['tgl_pengaduan']; ?></td>
                        <td><?php echo $pengaduan['nik']; ?></td>
                        <td><?php echo $pengaduan['isi_laporan']; ?></td>
                        <td><?php echo $pengaduan['foto']; ?></td>
                        <td><?php echo $pengaduan['status']; ?></td>
                        <td>
                        <a href="tanggapan_detail.php?id_pengaduan=<?=$pengaduan['id_pengaduan'];?>" class="btn btn-info btn-icon-split btn-sm">
                          <span class="icon text-white-50">
                            <i class="fas fa-info"></i>
                          </span>
                          <span class="text">Detail</span>
                        </a>
                        <a href="tanggapan.php?id_pengaduan=<?=$pengaduan['id_pengaduan'];?>" class="btn btn-primary btn-icon-split btn-sm">
                          <span class="icon text-white-50">
                            <i class="fas fa-eye"></i>
                          </span>
                          <span class="text">Tanggapi</span>
                        </a>
                        </td>
                        </td>
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