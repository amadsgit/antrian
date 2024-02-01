<?php
    $konek = mysqli_connect("localhost","root","", "antrian");

    $ruang = $_POST['ruang'];
    $nomor = $_POST['nomor'];

    $edit = mysqli_query($konek, "UPDATE tabelantrian set panggil = 'sudah', ruang = '$ruang' where nomor='$nomor' ");
?>