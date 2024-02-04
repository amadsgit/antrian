  
    <?php
    include "koneksi.php";
    // error_reporting(0);
    // session_start();
    // $_SESSION['page']='show-screen.php';
    $val_huruf = $_GET['val_huruf'];
    $val_nomor = $_GET['val_nomor'];
    $val_ruang = $_GET['val_ruang'];
    $val_tujuan = $_GET['val_tujuan'];
    $val_nama = $_GET['val_nama'];
    
    // $edit = mysqli_query($konek, "UPDATE tabelantrian set loket = 'sudah' where nomor='$val_nomor' ");
    $input = mysqli_query($konek, "INSERT INTO tabeltampil (id, huruf, nomor, nama, ruang, tujuan) VALUES (NULL, '$val_huruf', '$val_nomor', '$val_nama', '$val_ruang', '$val_tujuan')");
    if (($input) === TRUE) {
        header("Location: http://localhost/antrian-puskesmas/show-screen.php");
    }
    ?>
