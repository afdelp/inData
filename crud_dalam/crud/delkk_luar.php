<?php
include '../../conf.php';
$id = $_GET["id"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM kk_dalam WHERE no_kk='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if($hasil_query) {
      $conn->query("DELETE FROM warga_dalam WHERE no_kk='$id' ");
      echo "<script>alert('Data berhasil dihapus.');window.location='../wl.php';</script>";
    } else {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
      " - ".mysqli_error($conn));
      
    }