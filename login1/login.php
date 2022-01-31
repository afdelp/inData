<?php 
// mengaktifkan session pada php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

// menghubungkan php dengan koneksi database
include '../conf.php';

// menangkap data yang dikirim dari form login
$username = $_POST['nama'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * from rt where nama='$username' ");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	if (password_verify($password,$data["password"])) {
	

		// cek jika user login sebagai admin
		if($data['level']=="rt"){

			// buat session login dan username
			$_SESSION['login']= true;
			$_SESSION['nama'] = $username;
			$_SESSION['level'] = $data["level"];
			$_SESSION["rt"] = true;
			// alihkan ke halaman dashboard admin
			header("Location: ../rt.php");

		// cek jika user login sebagai pegawai
		}else if($data['level']=="sekertaris"){
			// buat session login dan username
			$_SESSION['login']= true;
			$_SESSION['nama'] = $username;
			$_SESSION['level'] = $data["level"];
			$_SESSION["sekertaris"] = true;
			// alihkan ke halaman dashboard pegawai
			header("Location: ../sekertaris.php");

		// cek jika user login sebagai pengurus
		}else{

			// alihkan ke halaman login kembali
			echo "<script>alert('Username atau Password salah!.');window.location='login.php';</script>";
		}
  	}else{
		  
		echo "<script>alert('Username atau Password salah!.');window.location='login.php';</script>";
	}
}else{
		  
	echo "<script>alert('Username atau Password salah!.');window.location='login.php';</script>";
}

?>