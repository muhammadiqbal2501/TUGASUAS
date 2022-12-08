<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TRAVELER - Free Travel Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() . "assets/lib/owlcarousel/assets/owl.carousel.min.css" ?>" rel="stylesheet">
    <link href="<?= base_url() .  "assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() .  "assets/css/style.css" ?>" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">Kuliner</span>Kita</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                    <a href="<?php echo base_url() . "welcome/index" ?>" class="nav-item nav-link">Home</a>
                        <a href="<?php echo base_url() . "welcome/about" ?>" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">     
                                <a href="<?php echo base_url() . "welcome/single" ?>" class="dropdown-item">Blog Detail</a>
                                <a href="<?php echo base_url() . "welcome/destination" ?>" class="dropdown-item">Destination</a>
                            </div>
                        </div>
                        <a href="<?php echo base_url() . "welcome/contact" ?>" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">KHAS KULNER NUSANTARA</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Blog Detail</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    
    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?PHP echo base_url() . "assets/img/30.jpg"?>"> 
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <h2 class="mb-3">NASI TUMPENG </h2>
                            <p>Ingin tahu resep nasi tumpeng mini sederhana? Kini nasi tumpeng bukan hanya disajikan di dalam tampah besar dengan segala lauk-pauknya dan dinikmati prasmanan untuk beramai-ramai. Tetap terlihat istimewa dan semakin menggiurkan, nasi tumpeng versi mini jadi punya kesan lebih personal dengan dibuat per porsi. Biasanya tumpeng mini nasi kuning disajikan dalam kotak atau wadah mika bulat sehingga terlihat menggemaskan.

Gunakan beras pulen sebagai bahan utama tumpeng mini nasi kuning agar nasi lebih mudah dicetak dan tetap kokoh saat dikeluarkan dari dalam cetakan. Selain menggunakan beras pulen, ada juga variasi nasi tumpeng berbahan perpaduan beras putih dan beras ketan yang membuatnya mudah dicetak dan tidak hancur saat dikeluarkan dari cetakan. Biasanya resep ini digunakan untuk tumpeng dalam tampah besar. Inilah langkah awal cara membuat nasi kuning yang enak dan pulen!.</p>
                            <p>Nasi kuning
500
g beras putih, cuci bersih
2
lembar daun salam
1
batang serai
1
sdt kunyit bubuk
1
sdt Royco Kaldu Ayam
1
sdm air jeruk nipis
350
ml air
250
ml susu rendah lemak
150
ml santan kental
Ayam goreng
1
ekor (800 g) ayam, potong 12 bagian
2
lembar daun salam
1
batang serai, memarkan
500
ml air
2
sdt Royco Kaldu Ayam
Bumbu ungkep, haluskan
10
siung bawang putih
3
butir kemiri, sangrai
3
cm lengkuas
2
cm kunyit
2
sdt ketumbar
1
cm jahe
1
sdt merica putih bubuk
⅓
sdt jintan bubuk
Kering tempe
200
g tempe, potong dadu kecil, goreng kering
6
butir bawang merah, iris tipis
4
siung bawang putih
3
buah cabai merah, potong serong
2
sdt asam jawa, larutkan dengan 2 sdm air panas
2
sdm minyak, untuk menumis
1
sdm gula merah
2
sdm Bango Kecap Manis
½
sdt garam
Pelengkap
perkedel
telur dadar
tomat
daun kemangi
mentimunNasi kuning
500
g beras putih, cuci bersih
2
lembar daun salam
1
batang serai
1
sdt kunyit bubuk
1
sdt Royco Kaldu Ayam
1
sdm air jeruk nipis
350
ml air
250
ml susu rendah lemak
150
ml santan kental
Ayam goreng
1
ekor (800 g) ayam, potong 12 bagian
2
lembar daun salam
1
batang serai, memarkan
500
ml air
2
sdt Royco Kaldu Ayam
Bumbu ungkep, haluskan
10
siung bawang putih
3
butir kemiri, sangrai
3
cm lengkuas
2
cm kunyit
2
sdt ketumbar
1
cm jahe
1
sdt merica putih bubuk
⅓
sdt jintan bubuk
Kering tempe
200
g tempe, potong dadu kecil, goreng kering
6
butir bawang merah, iris tipis
4
siung bawang putih
3
buah cabai merah, potong serong
2
sdt asam jawa, larutkan dengan 2 sdm air panas
2
sdm minyak, untuk menumis
1
sdm gula merah
2
sdm Bango Kecap Manis
½
sdt garam
Pelengkap
perkedel
telur dadar
tomat
daun kemangi
mentimun.</p>
                            <h4 class="mb-3">BUBUR MERAH PUTIH</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="<?php echo base_url(). "assets/img/31.jpg"?>">
                            <p>	 bubur merah putih mempunyai ada khas Beras, rendam semalaman - 100 gram
Beras ketan, rendam semalaman - 100 gram
Gula merah, sisir - 125 gram
Air, untuk melarutkan gula merah - 75 ml
Santan, dari 1/2 butir kelapa - 500 ml
Air - 750 ml
Garam - 1/2 sdt
Daun pandan, simpulkan - 2 lembar
KUAH SANTAN:
Santan kental dari 1/2 butir kelapa - 200 ml
Daun pandan, simpukan - 1 lembar
Garam - secukupnya
Tepung maizena, larutkan dengan 2 sdm air - 1/2 sdt.</p>
                            <h5 class="mb-3">KUE PUTU</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="<?php echo base_url(). "assets/img/32.jpg"?>">
                            <p>
                            Bahan Putu:
400 gr tepung beras
200 ml air pandan
1/2 sdt garam halus
Secukupnya pasta pandan
Secukupnya pewarna kuning
Bahan Isian:
200-250 gr gula merah
Bahan Taburan:
300 gr kelapa parut
1/2 sdt garam
2 lembar daun pandan.</p>
                        </div>
                    </div>
                    <!-- Blog Detail End -->
    
                    
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <img src="img/user.jpg" class="img-fluid mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-primary mb-3">John Doe</h3>
                        <p>Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit no ut est  ipsum erat kasd amet elitr</p>
                        <div class="d-flex justify-content-center">
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
    
                

                    <!-- Category List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Design</a>
                                    <span class="badge badge-primary badge-pill">150</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Development</a>
                                    <span class="badge badge-primary badge-pill">131</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Online Marketing</a>
                                    <span class="badge badge-primary badge-pill">78</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Keyword Research</a>
                                    <span class="badge badge-primary badge-pill">56</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Email Marketing</a>
                                    <span class="badge badge-primary badge-pill">98</span>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                    </div>
    
                    <!-- Tag Cloud -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h4>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">TRAVEL</span>ER</h1>
                </a>
                <p>Sed ipsum clita tempor ipsum ipsum amet sit ipsum lorem amet labore rebum lorem ipsum dolor. No sed vero lorem dolor dolor</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Domain</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() .  "assets/lib/easing/easing.min.js"?>"></script>
    <script src="<?= base_url() .  "assets/lib/owlcarousel/owl.carousel.min.js"?>"></script>
    <script src="<?= base_url() .  "assets/lib/tempusdominus/js/moment.min.js"?>"></script>
    <script src="<?= base_url() .  "assets/lib/tempusdominus/js/moment-timezone.min.js"?>"></script>
    <script src="<?= base_url() .  "assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js" ?>"></script>

    <!-- Contact Javascript File -->
    <script src="<?= base_url() . "assets/mail/jqBootstrapValidation.min.js" ?>"></script>
    <script src="<?= base_url() . "assets/mail/contact.js" ?>"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>