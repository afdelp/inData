<?php 

require "../conf.php";

$no_kk = $_POST['no_kk'];
$kepala = $_POST['nama_kepala'];
$jalan = $_POST['jalan'];
$no_rt = $_POST['no_rt'];
$no_rumah = $_POST['no_rumah'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];

$sql= mysqli_query($conn,"INSERT INTO kk_luar (no_kk, nama_kepala, jalan, no_rt, no_rumah, kelurahan, kecamatan) VALUES ('$no_kk','$kepala','$jalan','$no_rt','$no_rumah','$kelurahan','$kecamatan') " );
 
if ($sql) {
     header( "location:alamatluar.php?id=$no_kk" );
}else {
    echo "<script>alert('Gagal.');window.location='add.php';</script>";
}


?>