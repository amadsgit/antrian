<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css">
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
                        <a href="#" class="btn custom-btn custom-border-btn smoothscroll">ANTRIAN ONLINE</a>
                    </div>
                </div>
            </div>
        </nav>


        <section class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-2 pb-2">
                            <p class="text-white">NOMOR ANTRIAN</p>
                            <a href="#" class="btn custom-btn smoothscroll mt-1"><marquee behavior="" direction=""> Silahkan Pilih Ruangan..</marquee></a>
                        </div>
                        <div class="owl-carousel owl-theme">
                            <!-- umum A-->
                            <div class="owl-carousel-info-wrap item">
                                <img height="50px" src="images/profile/29.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang Umum</h4>
                                    <a href="inputantrian.php?huruf=A" target="_blank" class="btn btn-md btn-info">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                            <!-- anak B -->
                            <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/21.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang Anak</h4>
                                    <a href="inputantrian.php?huruf=B" target="_blank" class="btn btn-md btn-danger">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                            <!-- mtbs C -->
                            <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/21.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang MTBS</h4>
                                    <a href="inputantrian.php?huruf=C" target="_blank" class="btn btn-md btn-info">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                            <!-- kiakb D -->
                            <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/29.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang KIA KB</h4>
                                    <a href="inputantrian.php?huruf=D" target="_blank" class="btn btn-md btn-danger">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                            <!-- lansia E -->
                            <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/21.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang Lansia</h4>
                                    <a href="inputantrian.php?huruf=E" target="_blank" class="btn btn-md btn-danger">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                            <!-- prolanis F -->
                            <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/21.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang Prolanis</h4>
                                    <a href="inputantrian.php?huruf=F" target="_blank" class="btn btn-md btn-info">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                            <!-- gigi G -->
                            <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/21.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang Gigi & Mulut</h4>
                                    <a href="inputantrian.php?huruf=G" target="_blank" class="btn btn-md btn-info">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                            <!-- tindakan H -->
                            <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/29.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang Tindakan</h4>
                                    <a href="inputantrian.php?huruf=H" target="_blank" class="btn btn-md btn-danger">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                            <!-- imunisasi I -->
                            <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/21.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang Imunisasi</h4>
                                    <a href="inputantrian.php?huruf=I" target="_blank" class="btn btn-md btn-info">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                            <!-- pelangi J -->
                            <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/29.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang Pelangi</h4>
                                    <a href="inputantrian.php?huruf=J" target="_blank" class="btn btn-md btn-info">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                            <!-- konseling K -->
                            <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/29.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang Konseling</h4>
                                    <a href="inputantrian.php?huruf=K" target="_blank" class="btn btn-md btn-info">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                            <!-- laboratorium L -->
                            <div class="owl-carousel-info-wrap item">
                                <img src="images/profile/29.jpg" class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info text-center">
                                    <h4 class="mb-2">Ruang Laboratorium</h4>
                                    <a href="inputantrian.php?huruf=L" target="_blank" class="btn btn-md btn-info">Cetak Kartu Antrian</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <footer>
        <div class="container text-center pt-5">
            <div class="row align-items-end">
                <p><a id="reset_notif" href="resetantrian.php" class="btn btn-sm btn-danger">Reset Antrian</a>
                <?php
                include "koneksi.php";
                $query = mysqli_query($konek, "SELECT * FROM tabelantrian");
                $data = mysqli_num_rows($query);
                echo"<button class='btn btn-sm btn-info' disabled>Antrian hari ini : $data</button></p>"
                ?>
                </div>
            <div class="row align-items-center">
                    <p class="copyright-text mb-1 text-info">Copyright © 2024 AMD Computer | Mamad Ahmad</p>
            </div>
        </div>
    </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>
    <script>
        $('#reset_notif').on('click',function(){
            var getLink = $(this).attr('href');
            Swal.fire({
                title: "Yakin hapus data?",            
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Batal"
            
            }).then(result => {
                //jika klik ya maka arahkan ke resetantrian.php
                if(result.isConfirmed){
                    window.location.href = getLink
                }
            })
            return false;
        });
    </script>

</body>

</html>