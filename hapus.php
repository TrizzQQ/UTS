<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM tbl_083 WHERE id_083 = $id";
$hasil = mysqli_query ($conn,$sql);
if (!$hasil){
	echo "proses gagal";
}else {
	echo "proses berhasil";
	echo "<a href='data.php'>Show Data</a>";
}
?>