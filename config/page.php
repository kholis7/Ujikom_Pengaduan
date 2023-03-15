<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];

    switch ($page){
        //Petugas
        case 'belum_diproses' :
            include '../halaman/petugas/index.php';
            break;
    }
} else {
    include 'pages/dashboard.php';
}
?>