<?php
    include "koneksi.php";
    // error_reporting(0);
    $tampilkan = mysqli_query($konek, "SELECT * from tabelantrian where loket = 'menunggu' order by id");
    $data = mysqli_fetch_array($tampilkan);
    $huruf = $data['huruf'];
    
    session_start();
    $_SESSION['huruf']=$huruf;
    $_SESSION['panggil']='diloket';
    $_SESSION['loket']='Loket';
    $_SESSION['ruang']='1';
    $_SESSION['page']='loket1.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panggil Pasien-Loket <?php print"$_SESSION[ruang]"; ?></title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="css/templatemo-pod-talk.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script> -->
    <!-- <script src="js/jquery2.min.js"></script> -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <style>
        .blink {
        animation: blink-animation 3s steps(5, start) infinite;
        -webkit-animation: blink-animation 3s steps(5, start) infinite;
        }
        @keyframes blink-animation {
        to {
            visibility: hidden;
        }
        }
        @-webkit-keyframes blink-animation {
        to {
            visibility: hidden;
        }
        }
    </style>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-lg-1 me-0">
                    <img src="images/pkm.png" class="logo-image img-fluid">
                </a>
                <form action="#" method="get" class="custom-form search-form flex-fill me-1" role="search">
                    <div class="input-group input-group-lg">
                        <h3 class="text-light">UPTD PUSKESMAS CIKALAPA</h3>
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link">
                            <?php  
                            date_default_timezone_set('Asia/Jakarta');
                            echo "<span style='font-size:20px;'>" .date('d M Y |'). "</span>" ;?>

                            <span id="jam" style="font-size:20px"></span>

                            <script type="text/javascript">
                                window.onload = function() {
                                    jam();
                                }

                                function jam() {
                                    var e = document.getElementById('jam'),
                                        d = new Date(),
                                        h, m, s;
                                    h = d.getHours();
                                    m = set(d.getMinutes());
                                    s = set(d.getSeconds());

                                    e.innerHTML = h + ':' + m + ':' + s;

                                    setTimeout('jam()', 1000);
                                }

                                function set(e) {
                                    e = e < 10 ? '0' + e : e;
                                    return e;
                                }
                            </script>
                            </a>
                        </li>
                    </ul>

                    <div class="ms-4">
                        <a href="#" class="btn custom-btn btn-secondary custom-border-btn smoothscroll">Loket 1</a>
                    </div>
                </div>
            </div>
        </nav>

        <?php
            $tampilkan = mysqli_query($konek, "SELECT * from tabelantrian where loket = 'menunggu' order by id");
            $data = mysqli_fetch_array($tampilkan);
            $nomor = $data['nomor'];
            $huruf = $data['huruf'];
            $tujuan = '';
            if($huruf=="A"){
                $tujuan="Ruang Umum";
            } else if($huruf=="B"){
                $tujuan="Ruang Anak";
            } else if($huruf=="C"){
                $tujuan="Ruang MTBS";
            } else if($huruf=="D"){
                $tujuan="Ruang KIA";
            } else if($huruf=="E"){
                $tujuan="Ruang Lansia";
            } else if($huruf=="F"){
                $tujuan="Ruang Prolanis";
            } else if($huruf=="G"){
                $tujuan="Ruang Gigi";
            } else if($huruf=="H"){
                $tujuan="Ruang Tindakan";
            } else if($huruf=="I"){
                $tujuan="Ruang Imunisasi";
            } else if($huruf=="J"){
                $tujuan="Ruang Pelangi";
            } else if($huruf=="K"){
                $tujuan="Ruang Konseling";
            } else if($huruf=="L"){
                $tujuan="Ruang Laboratorium";
            }
        ?>
        <section class="hero-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12 col-12 text-center">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title" id="kedip">PANGGIL PASIEN</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-0">
                        <div class="custom-block2 text-center" style="justify-content: center;">
                            <span style="font-size:2em;">Nomor Antrian</span><br>
                            <span class="text-center">
                                <?php
                                    if($nomor=='') {
                                        print "<input type='text' class='text-center bg-white' style='border:none;width:200px;'' value='--' disabled>";
                                        print "
                                        <script type='text/javascript'>
                                            var button = document.getElementById('call');
                                            button.disabled = true;
                                        </script>";
                                    } else {
                                        $query = mysqli_query($konek, "SELECT * from tabelantrian where id = '$nomor' ");
                                        $data = mysqli_fetch_array($query);
                                        print"<input type='text' id='val_huruf' class='text-end text-primary bg-white blink p-0 m-0' style='border:none;width:140px;font-weight:bold;font-size:100px' value='$data[huruf]' disabled></input><span class='text-primary blink' style='font-size:8em'>-</span><input type='text' id='val_nomor' class='text-start text-primary bg-white blink' style='border:none;width:200px;font-weight:bold;font-size:100px' value='$data[nomor]' disabled></input><br>
                                        <input type='text' id='val_nama' value='$data[nama]' style='font-size:20px;border:none' class='text-center text-primary' disabled>"; 
                                    }
                                ?>
                            </span><br>
                            <input type="text" id="val_ruang" class='text-end bg-white' style="font-size:1.5em;border:none;width:200px;" value="<?= $_SESSION['loket'] ?>" disabled></input>
                            <input type="text" id="val_tujuan" class='text-start bg-white' style="font-size:1.5em;border:none;width:140px;" value=" <?= $_SESSION['ruang'] ?>" disabled></input><br>
                            <span style="font-size:1em;">
                                <?php
                                    $query = mysqli_query($konek, "SELECT * from tabelantrian  where id = '$nomor' ");
                                    $data = mysqli_fetch_array($query);
                                    echo "waktu daftar : $data[tanggal] | $data[waktu]"; 
                                ?>
                            </span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block text-center">
                            <div class="custom-block-info custom-block-overlay-info">
                                <!-- button panggil antrian loket 1 -->
                                <a href="laporanloket.php?loket=1" target="_blank" type="button" class="btn btn-md btn-primary"><i class="fa-solid fa-file"></i> Laporan</a>
                                <button id="call" type="submit" class="btn btn-md btn-danger"><i class="fa-solid fa-volume-high"></i> Panggil</button> 
                                <?php
                                    if($nomor=='') {
                                        print "
                                        <script type='text/javascript'>
                                            var button = document.getElementById('call');
                                            button.disabled = true;
                                        </script>";
                                    } else {
                                        print "
                                        <script type='text/javascript'>
                                            var button = document.getElementById('call');
                                            button.disabled = false;
                                        </script>";
                                    }
                                ?>

                                <!-- button panggil selanjutnya untuk loket 1 -->
                                <button id="next" onclick="panggil_loket()" class="btn btn-md btn-success"><i class="fa-solid fa-arrow-right"></i> Selanjutnya</button> <br><br>

                                <!-- function panggil selanjutnya untuk loket -->
                                <script>
                                    function panggil_loket() {
                                        <?php
                                            $ruang = $_SESSION['ruang'];
                                            $no = $nomor;
                                            $edit = mysqli_query($konek, 
                                            "UPDATE tabelantrian 
                                             SET loket = 'sudah', ke_loket ='$ruang', ruang = '$tujuan'
                                             WHERE nomor='$no' 
                                            ");
                                            $edit2 = mysqli_query($konek, 
                                            "UPDATE tabelrekap
                                             SET loket = 'sudah', ke_loket = '$ruang', ruang = '$tujuan'
                                             WHERE nomor='$no' 
                                            ");
                                        ?>
                                        window.location='<?php print"$_SESSION[page]";?>';
                                    }
                                </script>

                                <!-- menampilkan sisa antrian -->
                                    <?php
                                        $query = mysqli_query($konek, "SELECT * FROM tabelantrian WHERE loket='menunggu' ");
                                        $query3 = mysqli_query($konek, "SELECT * FROM tabelantrian");
                                        $data = mysqli_num_rows($query);
                                        $data3 = mysqli_num_rows($query3);
                                        echo "<span style='font-size:1em;' class='text-dark'><b>Sisa Antrian saat ini : $data / $data3 Orang ke Loket </span><br></b>"; 
                                        echo "Total antrian hari ini : $data3 Orang"; 
                                    ?>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <?php include"audio.php"; ?>
        <footer>
            <div class="container text-center pt-5">
                <div class="row align-items-center">
                        <p class="copyright-text mb-1 text-info">Copyright © 2024 AMD.Dev | Ma2d Ahmad</p>
                </div>
            </div>
        </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>