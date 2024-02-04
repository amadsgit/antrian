
    <?php
    // error_reporting(0);
    include "koneksi.php";
    
    $huruf = $_GET['huruf'];
    $nama = $_GET['nama'];
    $tampilkan = mysqli_query($konek, "select * from tabelantrian");
    $hitung = mysqli_num_rows($tampilkan);
    $nomor = $hitung + 1;
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date('d M Y');
    $waktu = date('H:i');
    
    $input = mysqli_query($konek, "INSERT INTO tabelantrian (tanggal, waktu, nama, nomor, huruf, loket, ruang, panggil, farmasi) values ('$tanggal','$waktu', '$nama', '$nomor','$huruf', '0', '0', '0', '0')");
    $input2 = mysqli_query($konek, "INSERT INTO tabelrekap (tanggal, waktu, nama, nomor, huruf, loket, ruang, panggil, farmasi) values ('$tanggal','$waktu', '$nama', '$nomor','$huruf', '0', '0', '0', '0')");
    
    if ($input&&$input2)
    {
        print"<script>window.location='printantrian.php?nomor=$nomor&tanggal=$tanggal&waktu=$waktu&nama=$nama&huruf=$huruf'</script>";
    }

    // var_dump($input);
    ?>