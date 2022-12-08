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
    <link href="<?php echo base_url() ."assets/lib/owlcarousel/assets/owl.carousel.min.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url() . "assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url() . "assets/css/style.css" ?>" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>kuliner nusantara@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>08981045926</p>
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
                    <h1 class="m-0 text-primary"><span class="text-dark">Kuliner</span>kamu :(</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="<?php echo base_url() . "welcome/index" ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo base_url() . "welcome/about" ?>" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">     
                                <a href="<?php echo base_url() . "welcome/single" ?>" class="dropdown-item">Blog Detail</a>
                                <a href="<?php echo base_url() . "welcome/destination" ?>" class="dropdown-item">Destination</a>
                            </div>
                        </div>
                        <a href="<?php echo base_url() . "welcome/contact" ?>" class="nav-item nav-link">Contact</a>
                        <a href="<?php echo base_url() . "auth/login" ?>" class="nav-item nav-link">Login</a>
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
                <h3 class="display-4 text-white text-uppercase">KULINER</h3>
                <h4 class="display-4 text-success text-uppercase">KHAS KULINER NUSANTARA</h4>
            </div>
        </div>
    </div>
    <!-- Header End -->


   


    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Kuliner KAMU DONG :
                )</h6>
                <h1>Explore Top Kuliner</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="<?php echo base_url() . "assets/img/21.jpg" ?>" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://salsawisata.com/oleh-oleh-khas-bandung/">
                            <h5 class="text-white">bandung</h5>
                            <span>Seblak bandung</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="<?php echo base_url() . "assets/img/24.jpg" ?>" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://salsawisata.com/makanan-khas-jogja/">
                            <h5 class="text-white">Jogja</h5>
                            <span>Bakpia pathuk</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="<?php echo base_url() . "assets/img/7.jpeg" ?>" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://dolanyok.com/makanan-khas-ambon/">
                            <h5 class="text-white">Ambon</h5>
                            <span>Pika ambon</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="<?php echo base_url() . "assets/img/20.jpg" ?>" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://dolanyok.com/makanan-khas-malang/">
                            <h5 class="text-white">Malang</h5>
                            <span>Bakso malang</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="<?php echo base_url() . "assets/img/22.jpg" ?>" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://www.traveloka.com/id-id/explore/culinary/makanan-khas-palembang-acc/46397">
                            <h5 class="text-white">Palembang</h5>
                            <span>pempek</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="<?php echo base_url() ."assets/img/10.jpeg" ?>" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="https://www.topijelajah.com/makanan-khas-dki-jakarta.html">
                            <h5 class="text-white">Jakarta</h5>
                            <span>Kerak telur</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Blog</h6>
                <h1>Latest From Our Blog</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?php echo base_url() . "assets/img/3.jpEg" ?>" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">08</h6>
                                <small class="text-white text-uppercase">march</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">LUMPIA SEMARANG DENGAN ISI BERLIMPAH DAN CRISPYDI LUAR</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?php echo base_url() . "assets/img/8.jpeg" ?>" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">TONGSENG DENGAN KUAH SANTAN YANG GURIH DAN LEZAT</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="<?php echo base_url() . "assets/img/12.jpg" ?>" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">25</h6>
                                <small class="text-white text-uppercase">dec</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">NASI GORENG cocok buat sarapan pagi atau di malam hari ges</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


   