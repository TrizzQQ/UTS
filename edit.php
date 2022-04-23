<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
<h1>Edit Data</h1>
<?php
include 'koneksi.php';
$id = $_GET ['id'];
$sql = "SELECT * FROM tbl_083 WHERE id_083=$id";
$hasil = mysqli_query($conn,$sql);
?>
<?php
while ($row = mysqli_fetch_array($hasil)){
	?>
	<form method="post" action="update.php">
		<input type="hidden" name="id_083" value="<?php echo $row ['id_083']?>">
		Nama : <input type="text" name="nama_083" value="<?php echo $row ['nama_083']?>">
		E-Mail : <input type="E-Mail" name="email_083" value="<?php echo $row ['email_083']?>">
		<input type="submit" name="tambah">
	</form> <?php
} ?>
</body>
</html>