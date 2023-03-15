<?php
include "header.php";

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Data Masyarakat</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php 
                                include "../config/koneksi.php";
                                $masyarakat = mysqli_query($koneksi,"SELECT * from tb_masyarakat");
                                echo mysqli_num_rows($masyarakat);
							?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Verifikasi Pengaduan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php 
                                include "../config/koneksi.php";
                                $verifikasi = mysqli_query($koneksi,"SELECT * from tb_pengaduan where status = '0'");
                                echo mysqli_num_rows($verifikasi);
							?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-alt fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Tanggapan Pengaduan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php 
                                include "../config/koneksi.php";
                                $tanggapan = mysqli_query($koneksi,"SELECT * from tb_pengaduan where status = 'Proses'");
                                echo mysqli_num_rows($tanggapan);
							?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-code fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pengaduan Selesai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php 
                                include "../config/koneksi.php";
                                $selesai = mysqli_query($koneksi,"SELECT * from tb_pengaduan where status = 'Selesai'");
                                echo mysqli_num_rows($selesai);
							?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-check fa-3x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                <!-- /.container-fluid -->
<?php
include "footer.php";
?>