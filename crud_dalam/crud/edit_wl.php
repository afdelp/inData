<?php

require_once '../../conf.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
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

  
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = mysqli_query($conn,"UPDATE warga_dalam SET no_kk ='$no_kk' , nama_lengkap = '$nama' , nik = '$nik' , jenis_kelamin = '$jeniskelamin', 
  tempat_lahir = '$tempat' , tanggal_lahir = '$tanggal' , agama = '$agama' , pendidikan = '$pendidikan' , jenis_pekerjaan = '$pekerjaan' , status_pernikahan = '$nikah' , 
  status_hubungan = '$hubungan' , kewarganegaraan = '$warga' WHERE id_masyarakat = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data berhasil diubah'); window.location.href='../wl.php'</script>";
  } else {
    echo "<script>alert('Data gagal diubah'); window.location.href='../wl.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: ../../wl.php');
}
