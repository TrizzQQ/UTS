<?php
include 'koneksi.php';

if (isset($_POST['tambah'])){
	$nama = $_POST ['nama_083'];
	$email = $_POST ['email_083'];

	$sql = "INSERT INTO tbl_083 VALUES (null,'$nama','$email')";
	$hasil = mysqli_query ($conn,$sql);
	if (!$hasil){
		echo "proses gagal";
	}else {
		echo "proses berhasil<br>";
		echo "<a href='data.php'>Show Data</a>";
	}
}
?>