<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_trisna';

$conn = mysqli_connect ($host,$username,$password,$database);
if (!$conn){
	echo "Koneksi tidak berhasil";
}
?>