<?php 

require "../conf.php";

$no_kk = $_POST['no_kk'];
$jalan = $_POST['jalan'];
$no_rt = $_POST['rt'];
$no_rumah = $_POST['rumah'];
$kel = $_POST['kel'];
$kec = $_POST['kec'];

$sql= mysqli_query($conn,"INSERT INTO alamat_luar (no_kk, jalan, rt, no_rmh, kelurahan, kecamatan) VALUES 
('$no_kk','$jalan','$no_rt','$no_rumah','$kel','$kec') " );
 
if ($sql) {
     header( "<script>alert('berhasil.');window.location='wl.php';</script>" );
}else {
    echo "<script>alert('Gagal.');window.location='add.php';</script>";
}


?>