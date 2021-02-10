<?php
$host="localhost";
$user="sgoid";
$password="sayangkamu";
$db="Akun";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>