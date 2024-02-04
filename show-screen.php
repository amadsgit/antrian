<?php
    // error_reporting(0);
?>
<!doctype html>
<html lang="en" id="tampilan">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ANTREAN PKM CIKALAPA</title>

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
                        <h3 class="text-light">UPTD PUSKESMAS CIKALAPA<h3>
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
                            echo "<span style='font-size:24px;'>" .date('d M Y'). "</span>" ;?>
                            </a>
                        </li>

                        <li>
                        <button id="jam" class="btn btn-sm btn-danger" style="font-size:22px">
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
                        </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="hero-section">
            <div class="container mt-4">
                <div class="col-lg-12 col-12 text-center">
                    <div class="row">
                            <!-- coloumn antrian dipanggil -->
                            <div class="col-lg-6 mb-1 mb-lg-0" style="align-items:center;">
                                <div class="custom-block3 text-center shadow">
                                    <span id="blink" style="font-size:1.5rem;font-weight:bold;" class="text-dark">ANTREAN DIPANGGIL</span><hr>
                                    <div class="align-items-center">
                                        <!-- tampilan antrian dipanggil -->
                                        <input type="text" id="valhuruf" class="text-end bg-white text-primary blink" style="border:none;width:140px;font-size:8em;font-weight:bold;"></input>
                                        <span class="blink text-primary" style="font-size:8em;">-</span> 
                                        <input type="text" id="valnomor" class="text-start text-primary bg-white blink" style="border:none;width:240px;font-size:8em;font-weight:bold;"></input><br>
                                        <input type="text" class="text-success" id="valunama" style="text-align:center;border:none;font-size:2em" disabled>

                                        <span class="d-flex pt-1"><img src="images/next.gif" width="90"><b>Ke:</b>
                                        <input type="text" id="valruang" class="text-end bg-white text-bold" style="font-size:2em;border:none;width:150px;font-weight:bold;" disabled></input>
                                        <input type="text" id="valtujuan" class="text-start bg-white" style="font-size:2em;border:none;width:230px;font-weight:bold;" disabled></input>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- coloumn videotron -->
                            <div class="col-lg-6 mb-lg-0 p-0 m-0" style="align-items:center;">
                                <div class=" text-center">
                                    <span style="font-size:1.3rem;font-weight:bold;" class="text-white"><marquee behavior="" direction="">SELAMAT DATANG DI UPTD PUSKESMAS CIKALAPA KABUPATEN SUBANG ~ WILUJENG SUMPING ~ CIKALAPA EDUN ~ EFEKTIF DINAMIS UNGGUL DAN NYAMAN ~ KESEHATAN ANDA ADALAH TUJUAN KAMI ~ SEMOGA LEKAS SEMBUH KEMBALI</marquee></span><hr class="text-white">
                                    <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/yZIr_vPp-7k?si=RXacfMkC28fDz2OP-pPE&autoplay=1&mute=1&loop=1&playlist=yZIr_vPp-7k" title="YouTube iframe player" frameborder="0" allow="accelerometer;" loop="true"></iframe>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
        <div class="container text-center pt-5">
            <div class="row align-items-center">
                    <p class="copyright-text mb-1 text-info">Copyright © 2024 AMD.dev | by Ma2d Ahmad</p>
            </div>
        </div>
    </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tampil.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>