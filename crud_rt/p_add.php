<?php 

require "../conf.php";

$name = $_POST['nama'];
$pass = $_POST['password'];

$result = mysqli_query($conn,"SELECT nama FROM rt WHERE nama = '$name'");
if ( mysqli_fetch_assoc($result) ) {
    echo "<script>
    alert('NIK sudah terdaftar')
    </script>";
    return false;
}

$pass = password_hash($pass, PASSWORD_DEFAULT);


$sql= mysqli_query($conn,"INSERT INTO rt (nama, password,level) VALUES ('$name','$pass','sekertaris') " );
 
if ($sql) {
    echo "<script>alert('Berhasil registrasi.');window.location='../rt.php';</script>";
}else {
    echo "<script>alert('Gagal.')</script>";
}


?>