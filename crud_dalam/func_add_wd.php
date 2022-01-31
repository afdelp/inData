<?php 

require "../conf.php";

$no_kk = $_POST['no_kk'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jeniskelamin = $_POST['gender'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$agama = $_POST['agama'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$nikah = $_POST['nikah'];
$hubungan = $_POST['hubungan'];
$warga = $_POST['warga'];

$sql= mysqli_query($conn,"INSERT INTO warga_dalam (no_kk, nama_lengkap, nik, jenis_kelamin, tempat_lahir, tanggal_lahir,
 agama, pendidikan, jenis_pekerjaan, status_pernikahan, status_hubungan, kewarganegaraan)
 VALUES ('$no_kk','$nama','$nik','$jeniskelamin','$tempat','$tanggal','$agama','$pendidikan','$pekerjaan','$nikah','$hubungan','$warga') " );
 
if ($sql) {
    echo "<script>alert('Data Berhasil ditambahkan.');window.location='wl.php';</script>";
}else {
    echo "<script>alert('Gagal.');window.location='add.php';</script>";
}


?>