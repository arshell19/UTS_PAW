<?php 
include "koneksi.php";

$nama = $_POST['nama_053'];
$email = $_POST['email_053'];

$sql = "INSERT INTO tbl_053 VALUES(null, '$nama', '$email')";
$hasil = mysqli_query($koneksi,$sql);

if (!$hasil){
	echo "gagal";
}else{
	echo "<a href='index.php'>BERHASIL DITAMBAHKAN";
}

?>