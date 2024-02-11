<?php
session_start();

if(empty($_SESSION['nisn'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index.php');
    </script>";
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa - Aplikasi Pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #12E193;">
<div class="container mt-5">
       
    <h3>Pembayaran SPP.</h3>
    <div class="alert alert-info">
        Anda Login Sebagai Siswa,Selamat Datang Ananda <b><?= $_SESSION['nama'] ?></b> Di Aplikasi Pembayaran SPP.
    </div>
    <a href="siswa.php" class="btn btn-success">Home</a>
    <a href="siswa.php?url=logout" class="btn btn-success">Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <!-- isi web -->
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo"<h4>Selamat Datang Di Halaman Siswa.</h4>";
                echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";
                echo"Tujuan dan fungsi utama website ini adalah menyediakan platform pembayaran spp bagi orang tua. Manfaat Sistem Informasi Pembayaran SPP yang di bangun adalah berfungsi memberikan pelayanan pembayaran SPP secara komputerisasi sehingga dalam pengolahan data pembayaran SPP dapat meminimalisir adanya kesalahan dalam rekapitulasi dana SPP. Dengan adanya sistem informasi pembayaran SPP tersebut, memudahkan petugas dalam pengolahan data meliputi pemasukan data, edit data dan transaksi pembayaran, sedangkan untuk Kepala Sekolah dapat memantau laporan pembayaran SPP setiap saat di ruangannya serta meningkatkan pelayanan kepada siswa. ";
                echo"<hr>";
                include'history-pembayaran.php';
            }else{
                include $file.'.php';
            }
            ?>
        </div>
    </div>

    </div>
    
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>