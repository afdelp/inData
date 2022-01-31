<?php
include '../conf.php';
$id = $_GET["id"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM rt WHERE id_user='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if($hasil_query) {
      echo "<script>alert('Data berhasil dihapus.');window.location='../rt.php';</script>";
    } else {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
      " - ".mysqli_error($conn));
      
    }