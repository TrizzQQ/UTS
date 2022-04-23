<!DOCTYPE html>
<html>
<head>
	<title>Tabel Data</title>
</head>
<body>
<h1>Tabel Data</h1>
<a href="tambah.php">Tambah Data</a>
<table width="100%" cellpadding="5" border="1">
	<tr>
		<td>ID</td>
		<td>Nama</td>
		<td>E_Mail</td>
		<td>Action</td>
	</tr>
	<?php
	include 'koneksi.php';
	$sql = $conn -> query ("SELECT * FROM tbl_083");
	while ($row = $sql -> fetch_object()){ ?>
		<tr>
			<td><?php echo $row -> id_083;?></td>
			<td><?php echo $row -> nama_083;?></td>
			<td><?php echo $row -> email_083;?></td>
			<td><a href="edit.php?id=<?php echo $row -> id_083?>">EDIT | </a>
				<a href="hapus.php?id=<?php echo $row -> id_083?>">Hapus</a>
			</td>
		</tr> <?php
	}
	?>
</table>
</body>
</html>