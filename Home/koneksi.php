<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$db         = "tokogitaris";

$conn = mysqli_connect($servername,$username,$password,$db);
if (!$conn){
    die("Koneksi gagal :".mysqli_connect_error());
}
?>