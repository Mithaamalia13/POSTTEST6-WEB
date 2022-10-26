<?php 

$server = "localhost";
$username = "root";
$password = "";
$db_name = "mountravelers";

$koneksi = mysqli_connect($server, $username, $password, $db_name) or die(mysqli_error($koneksi));

// if(!$db){
//     die("Gagal terhubung");
// }

?>