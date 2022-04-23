<?php
include "koneksi.php";
$id=$_GET['id'];
$sql = "DELETE FROM tbl_053 WHERE id_053=$id";
$hasil=mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "gagal delete data";
}else{
    echo "<a href='index.php'>BERHASIL DIHAPUS</a>";
}
?>