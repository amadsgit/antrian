<?php
    include "koneksi.php";
    session_start();
    $_SESSION['page']='ruang-umum.php';
    $huruf='A';
    $panggil='diruang';
    $loket='Ruang';
    $ruang='umum';
    error_reporting(0);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Panggil - Ruang <?= $ruang; ?></title>
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
    <script src="plugins/jquery/jquery.min.js"></script>
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
                        <a href="#" class="btn custom-btn custom-border-btn smoothscroll">Ruang <?= $ruang; ?></a>
                    </div>
                </div>
            </div>
        </nav>

        <?php
            $tampilkan = mysqli_query($konek, "SELECT * FROM tabelantrian WHERE loket = 'sudah' AND panggil = 'menunggu' AND huruf ='$huruf' ORDER BY id asc");
            $data = mysqli_fetch_array($tampilkan);
            $nomor = $data['nomor'];
            $nama = $data['nama'];
        ?>
        <section class="hero-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12 col-12 text-center">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">PANGGIL PASIEN</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block2 text-center" style="justify-content: center;">
                            <span style="font-size:2em;">Nomor Antrian</span><br>
                            <span>
                                <?php
                                    if($nomor=='') {
                                        print "<input type='text' class='text-center bg-white' style='border:none;width:200px;'' value='--' disabled>";
                                        print "
                                        <script type='text/javascript'>
                                            var button = document.getElementById('call');
                                            button.disabled = true;
                                        </script>";
                                    } else {
                                        print"<input type='text' id='val_huruf' class='blink text-end text-primary bg-white' style='border:none;width:140px;font-weight:bold;font-size:8em;' value='$huruf' disabled></input class='blink text-primary'>
                                        <span class='blink text-primary' style='font-size:8em;'>-</span>
                                        <input type='text' id='val_nomor' class='blink text-start text-primary bg-white' style='border:none;width:200px;font-weight:bold;font-size:8em;' value='$nomor' disabled></input>
                                        <input type='text' id='val_nama' value='$data[nama]' style='font-size:20px;border:none' class='text-center text-primary' disabled>"; 
                                    }
                                ?>
                            </span><br>
                            <input type="text" id="val_ruang" class='text-end bg-white' style="font-size:1.5em;border:none;width:150px;" value="<?= $loket; ?>" disabled></input>
                            <input type="text" id="val_tujuan" class='text-start bg-white' style="font-size:1.5em;border:none;width:140px;" value=" <?= $ruang; ?>" disabled></input><br>
                            <span style="font-size:1em;">
                                <?php
                                    $query = mysqli_query($konek, "SELECT * FROM tabelantrian  WHERE id = '$nomor' ");
                                    $data = mysqli_fetch_array($query);
                                    echo "waktu daftar : $data[tanggal] | $data[waktu]"; 
                                ?>
                            </span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block text-center">
                            <div class="custom-block-info custom-block-overlay-info">
                                <a href="laporan.php?huruf=<?= $huruf;?>" target="_blank" type="button" class="btn btn-md btn-primary"><i class="fa-solid fa-file"></i> Laporan</a>
                                <button id="call" type="button" class="btn btn-md btn-danger"><i class="fa-solid fa-volume-high"></i> Panggil</button> 
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

                                <!-- pemanggil audio  button Panggil -->
                                <?php
                                    if($nomor==10) {
                                        $sepuluh;
                                    } else if ($nomor==11) {
                                        $sebelas;
                                    } else if ($nomor==100) {
                                        $seratus;
                                    } else {
                                        $jumlah=strlen($nomor);
                                            if($jumlah==1) {
                                                $nomor=$nomor;
                                            } else if($jumlah==2) {
                                                $nomora=substr($nomor, 0, 1);
                                                $nomorb=substr($nomor, 1, 1);
                                            } else if($jumlah==3) {
                                                $nomorc=substr($nomor, 0, 1);
                                                $nomord=substr($nomor, 1, 1);
                                                $nomore=substr($nomor, 2, 1);
                                            }
                                    } 
                                ?>

                                <div id="audioplay">
                                    <audio id='audio1' src='audio/bell.mp3' type='audio/mpeg' preload='auto'></audio>
                                    <audio id='audio2' src='audio/nomorantrian.mp3' type='audio/mpeg' preload='auto'></audio>
                                    <audio id='audio3' src='audio/<?= $huruf ?>.mp3' type='audio/mpeg' preload='auto'></audio>

                                    <?php
                                    if($jumlah==1) {
                                        print"<audio id='audio4' src='audio/$nomor.mp3' type='audio/mpeg' preload='auto'></audio>";
                                    } 
                                    else if($nomor==10) {
                                        print"<audio id='audio4' src='audio/10.mp3' type='audio/mpeg' preload='auto'></audio>";
                                    } 
                                    else if($nomor==11) {
                                        print"<audio id='audio4' src='audio/11.mp3' type='audio/mpeg' preload='auto'></audio>";
                                    } 
                                    else if($nomor==100) {
                                        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
                                    } 
                                    else if($jumlah==2 and $nomor < 20)  {
                                        print"<audio id='audio4' src='audio/$nomorb.mp3' type='audio/mpeg' preload='auto'></audio>";
                                        print"<audio id='audio5' src='audio/belas.mp3' type='audio/mpeg' preload='auto'></audio>";
                                    } 
                                    else if($jumlah==2 and $nomor > 19) {
                                        print"<audio id='audio4' src='audio/$nomora.mp3' type='audio/mpeg' preload='auto'></audio>";
                                        print"<audio id='audio5' src='audio/puluh.mp3' type='audio/mpeg' preload='auto'></audio>";
                                        print"<audio id='audio6' src='audio/$nomorb.mp3' type='audio/mpeg' preload='auto'></audio>";
                                    }
                                    else if($jumlah==3 and $nomor < 110) {
                                        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
                                        print"<audio id='audio5' src='audio/$nomore.mp3' type='audio/mpeg' preload='auto'></audio>";
                                    }
                                    else if($jumlah==3 and $nomor == 110) {
                                        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
                                        print"<audio id='audio5' src='audio/10.mp3' type='audio/mpeg' preload='auto'></audio>";
                                    }
                                    else if($jumlah==3 and $nomor == 111) {
                                        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
                                        print"<audio id='audio5' src='audio/11.mp3' type='audio/mpeg' preload='auto'></audio>";
                                    }
                                    else if($jumlah==3 and $nomor < 120) {
                                        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
                                        print"<audio id='audio5' src='audio/$nomore.mp3' type='audio/mpeg' preload='auto'></audio>";
                                        print"<audio id='audio6' src='audio/belas.mp3' type='audio/mpeg' preload='auto'></audio>";
                                    }
                                    else if($jumlah==3 and $nomor > 119) {
                                        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
                                        print"<audio id='audio5' src='audio/$nomord.mp3' type='audio/mpeg' preload='auto'></audio>";
                                        print"<audio id='audio6' src='audio/puluh.mp3' type='audio/mpeg' preload='auto'></audio>";
                                        print"<audio id='audio7' src='audio/$nomore.mp3' type='audio/mpeg' preload='auto'></audio>";
                                    }
                                    ?>

                                    <audio id="audio8" src='audio/<?= $panggil;?>.mp3' type='audio/mpeg' preload='auto'></audio>
                                    <audio id='audio9' src='audio/<?= $ruang; ?>.mp3' type='audio/mpeg' preload='auto'></audio>
                                </div>

                                <!-- function panggil pasien -->
                                <script type="text/javascript"> 
                                    $(document).ready(function(){
                                        $("#call").click(function(){
                                            var val_huruf = $('#val_huruf').val()
                                            var val_nomor = $('#val_nomor').val()
                                            var val_ruang = $('#val_ruang').val()
                                            var val_tujuan = $('#val_tujuan').val()
                                            var val_nama = $('#val_nama').val()
                                            $.ajax({
                                                url:'displayinput.php',
                                                method:'GET',
                                                data:{
                                                    val_huruf:val_huruf,
                                                    val_nomor:val_nomor,
                                                    val_ruang:val_ruang,
                                                    val_tujuan:val_tujuan,
                                                    val_nama:val_nama,
                                                } 
                                            });
                                        
                                            var audio1 = document.getElementById('audio1');
                                            var audio2 = document.getElementById('audio2');
                                            var audio3 = document.getElementById('audio3');
                                            var audio4 = document.getElementById('audio4');
                                            var audio5 = document.getElementById('audio5');
                                            var audio6 = document.getElementById('audio6');
                                            var audio7 = document.getElementById('audio7');
                                            var audio8 = document.getElementById('audio8');
                                            var audio9 = document.getElementById('audio9');

                                            setTimeout(function() {document.getElementById('call').disabled = true}, 1000 );
                                            setTimeout(function() {document.getElementById('next').disabled = true}, 1000 );
                                            audio1.play();
                                            setTimeout(function() { audio2.play() }, 6000);
                                            setTimeout(function() { audio3.play() }, 8000);
                                            setTimeout(function() { audio4.play() }, 9000);
                                            setTimeout(function() { audio5.play() }, 10000);
                                            setTimeout(function() { audio6.play() }, 11000);
                                            setTimeout(function() { audio7.play() }, 12000);
                                            setTimeout(function() { audio8.play() }, 13000);
                                            setTimeout(function() { audio9.play() }, 14000);
                                            setTimeout(function() {document.getElementById('call').disabled = false}, 16000 );
                                            setTimeout(function() {document.getElementById('next').disabled = false}, 16000 );

                                        });
                                    });
                                </script>

                                <!-- function panggil selanjutnya untuk loket -->
                                <script>
                                    // function panggil selanjutnya untuk ruang poli
                                    function panggil_loket() {
                                        <?php
                                        $no = $nomor;
                                        $edit = mysqli_query($konek, "UPDATE tabelantrian SET panggil = 'selesai' WHERE nomor='$no' ");
                                        $edit2 = mysqli_query($konek, "UPDATE tabelrekap SET panggil = 'selesai' WHERE nomor='$no' ");
                                        // exit();
                                        ?>
                                    window.location='<?php print"$_SESSION[page]";?>';
                                }
                                </script>
                                <button id="next" onclick="panggil_loket()" class="btn btn-md btn-success mt-3"><i class="fa-solid fa-arrow-right"></i> Selanjutnya</button> <br><br>
                                
                                    <?php
                                        $query = mysqli_query($konek, "SELECT * FROM tabelantrian WHERE panggil='menunggu' AND loket = 'sudah' AND huruf ='$huruf' ");
                                        $query2 = mysqli_query($konek, "SELECT * FROM tabelantrian WHERE loket = 'sudah' AND huruf ='$huruf' ");
                                        $query3 = mysqli_query($konek, "SELECT * FROM tabelantrian");
                                        $data = mysqli_num_rows($query);
                                        $data2 = mysqli_num_rows($query2);
                                        $data3 = mysqli_num_rows($query3);
                                        echo "<span style='font-size:1em;' class='text-dark'><b>Sisa Antrian saat ini : $data / $data2 Orang ke ruang $ruang </span><br></b>"; 
                                        echo "Total antrian hari ini : $data3 Orang"; 
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container text-center pt-5">
                <div class="row align-items-center">
                        <p class="copyright-text mb-1 text-info">Copyright © 2024 AMD.dev | Ma2d Ahmad</p>
                </div>
            </div>
        </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>