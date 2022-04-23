<?php
include 'koneksi.php';

if(isset($_POST['tambah'])){
	$id = $_POST ['id_083'];
	$nama = $_POST ['nama_083'];
	$email = $_POST ['email_083'];

	$sql = "UPDATE tbl_083 set nama_083 ='$nama', email_083='$email' WHERE id_083 = '$id' ";
	$hasil = mysqli_query ($conn,$sql);
	if(!$hasil){
		echo "proses gagal";
	}else{
		echo "proses berhasil";
		echo "<a href='data.php'>Show Data</a>";
	}
}
?>