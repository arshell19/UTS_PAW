<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>edit data</title>
</head>
<body style="text-align: center">
	<?php
	include 'koneksi.php';
	$id=$_GET['id'];
	$sql = "SELECT * FROM tbl_053 where id_053=$id";
	$hasil = mysqli_query($koneksi, $sql);
	if (!$hasil){
	    echo "query salah";
	}
	?>

	<h3>FORMULIR EDIT DATA</h3>
	<?php
	while ($baris = mysqli_fetch_array($hasil))
	{
	?>

	<form method="POST" action="update.php">
	<input type="hidden" name="id_053" value="<?php echo $baris['id_053']?>">

	<div>
		<label>Nama</label>
		<br>
		<input type="text" name="nama_053" value="<?php echo $baris['nama_053'];?>">
	</div>

	<div>
		<label>Email</label>
		<br>
		<input type="text" name="email_053" value="<?php echo $baris['email_053'];?>">
	</div>
	<br>
	<div>
    	<input type="submit" name="submit" value="update">
    </div>
	</form>

	<?php
	}
	?> 
</body>
</html>