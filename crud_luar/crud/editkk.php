<?php

require_once '../../conf.php';

if (isset($_POST['submit'])) {
  $nama = $_POST['kepala'];
  $kk = $_POST['kk'];
  
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = mysqli_query($conn,"UPDATE kk_luar SET nama_kepala = '$nama' WHERE no_kk = '$kk'");

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
