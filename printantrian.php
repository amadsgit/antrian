<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/print.css">
    <title>Print antrian</title>
</head>
    <?php
        $nomor=$_GET['nomor'];
        $tanggal=$_GET['tanggal'];
        $waktu=$_GET['waktu'];
        $huruf=$_GET['huruf'];
        $nama=$_GET['nama'];
    ?>
<body class="struk" onload="printOut()">
    <section class="sheet">
        <table style="padding-top:5px;" width="100%">
            <tr>
                <td colspan="2" style="text-align:center;font-size:16px;">UPTD PUSKESMAS CIKALAPA</td>
            </tr>
            <tr>
                <td align="left" style="font-size:12px;"><?php print"$tanggal";?></td>
                <td align="right" style="font-size:12px;"><?php print"$waktu";?></td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="font-size:60px;"><?php print"$huruf-$nomor";?></td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="font-size:16px;"><?php print"$nama";?> <hr></td>
            </tr>
            <tr>
                <td colspan="2" align="center">silahkan menunggu antrian anda dipanggil <br>** Terima Kasih **</td>
            </tr>
        </table>
    </section>

    <script type="text/javascript">
        window.print();
        window.onfocus = function() { window.location.href= 'daftar.php'; }
        window.onmousemove = function() { window.location.href= 'daftar.php'; }
        // window.onfocus = function() { window.close(); }
        // window.onmousemove = function() { window.close(); }
    </script>
    <!-- <script>
        var lama = 1000;
        t = null;
        function printOut(){
            window.print();
            t = setTimeout("self.close()",lama);
        }
    </script>    -->

</body>
</html>