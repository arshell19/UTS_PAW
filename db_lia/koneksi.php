<?php
  $host ="localhost";
  $user ="root";
  $password =""; 
  $database ="db_lia";
  $koneksi = mysqli_connect($host, $user, $password, $database);
  if(!$koneksi){
      echo "Koneksi gagal";
  }
?> 