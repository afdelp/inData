<?php 

$conn = mysqli_connect("localhost","root","","indata");

if (!$conn) {
    die("konesi gagal:".mysqli_connect_error());
}
?>