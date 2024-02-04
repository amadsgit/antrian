<?php
  // define("DB_HOST", "localhost");
  // define("DB_USER", "root");
  // define("DB_PASSWORD", "");
  // define("DB_DATABASE", "antrian");

  $konek = mysqli_connect("localhost", "root", "Tanggal1007", "antrian");
  // Check connection
  if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
  }
?>  