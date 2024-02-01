
    <?php
    // error_reporting(0);
    include "koneksi.php";
    
    $huruf = $_GET['huruf'];
    $tampilkan = mysqli_query($konek, "select * from tabelantrian");
    $hitung = mysqli_num_rows($tampilkan);
    $nomor = $hitung + 1;
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date('d M Y');
    $waktu = date('H:i');
    
    $input = mysqli_query($konek, "insert into tabelantrian (tanggal, waktu, nomor, huruf, loket, ruang, panggil) values ('$tanggal','$waktu','$nomor','$huruf', '0', '0', '0')");
    
    if ($input)
    {
        print"<script>window.location='tampilcetak.php?nomor=$nomor&tanggal=$tanggal&waktu=$waktu&huruf=$huruf'</script>";
    }

    // var_dump($input);
    ?>