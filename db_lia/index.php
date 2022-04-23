<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tampilan index</title>
</head>
<body>
	<h2 style="text-align: center;">TAMPILAN DATA</h2>
	<a href="formulir.php">[+] Tambah Data</a>
	<table border="2" width="100%">
		<tr style="text-align: center;">
			<td>Id</td>
			<td>Nama</td>
			<td>Email</td>
			<td>Action</td>
		</tr>
		<?php
			include 'koneksi.php';
			$sql = "SELECT * FROM tbl_053";
			$hasil = mysqli_query($koneksi,$sql);
			while($baris=mysqli_fetch_array($hasil))
			{
		?>
		<tr>
			<td><?php echo $baris['id_053'];?></td>
			<td><?php echo $baris['nama_053'];?></td>
			<td><?php echo $baris['email_053'];?></td>
			<td style="text-align:center;">
				<button><a href="edit.php?id=<?php echo $baris['id_053'];?>">Edit</a></button>
				<button><a href="delete.php?id=<?php echo $baris['id_053'];?>">Delete</a></button>
			</td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>