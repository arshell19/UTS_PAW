<?php
include "koneksi.php";

$id = $_POST['id_053'];
$nama = $_POST['nama_053'];
$email = $_POST['email_053'];

$sql="UPDATE tbl_053 SET nama_053='$nama',email_053='$email' WHERE id_053=$id";
$hasil=mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "gagal";
}else{
    echo "<a href='index.php'>BERHASIL DIUPDATE</a>";
}

?>