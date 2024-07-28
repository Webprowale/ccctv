<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="webprowale" content="Crafting web for better future" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="keywords" content="CCTV & Security " />
    <meta name="description" content="CCTV" />
    <title>Neyo & Tee Tech || <?= esc($title) ?>  </title>
    <link rel="shortcut icon" href="img/logos/favicon.png" />
    <link rel="apple-touch-icon" href="img/logos/touch.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/Neyoo.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/ico.png" />
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="search/search.css">
    <link rel="stylesheet" href="quform/css/base.css">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <div id="preloader"></div>
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        <header class="header-style1 menu_area-light">

            <div class="navbar-default border-bottom border-color-light-white">

                <!-- start top search -->
                <div class="top-search bg-secondary">
                    <div class="container-fluid px-sm-1-6 px-lg-2-9">
                        <form class="search-form" action="" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search mt-2"><i class="fas fa-times"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">
                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="index.html" class="navbar-brand"><img id="logo" src="img/logos/logo-inner.png" alt="logo" /></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler bg-secondary"></div>

                                    <!-- menu area -->
                                    <ul class="navbar-nav align-items-lg-center ms-auto" id="nav" style="display: none;">
                                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                                        <li><a href="<?= base_url('/about') ?>">About Us</a></li>
                                        <li><a href="<?= base_url('/service') ?>">Services</a></li>
                                        <li>
                                            <a href="<?= base_url('/project') ?>">Projects</a>
                                            
                                        </li>
                                        <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
                                        <li>
                                            <a href="<?= base_url('/blog') ?>">Blog</a>
                                            
                                        </li>
     
                                    </ul>
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                        <ul>
                                            <!-- <li class="search"><a href="./blog.php"><i class="fas fa-search"></i></a></li> -->
                                            <li class="d-none d-xl-inline-block"><a href="<?= base_url('/contact') ?>" class="butn text-white md"><span>Free Quote</span></a></li>
                                        </ul>
                                    </div>
                                    <!-- end attribute navigation -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

  <?= $this->renderSection('content') ?>


  <footer class="bg-dark">
            <div class="container py-6 py-lg-8">
                <div class="row mt-n2-9 justify-content-between">
                    <div class="col-md-6 col-lg-5 mt-2-9 wow fadeIn" data-wow-delay="100ms">

                        <div class="footer-logo mb-1-9">
                            <a href="index.html"><img src="img/logos/logo-inner.png" alt="Footer Logo"></a>
                        </div>

                        <h4 class="text-white mb-1-9 fw-light w-lg-75 display-29 lh-base opacity8">Security and privacy are two sides of the same coin. You can’t have privacy without security and vice versa.</h4>

                        <ul class="social-icon-style1">
                            <li><a href="https://www.facebook.com/profile.php?id=100083049743235&mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/neyooteetech" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.tiktok.com/@neyoo_teetech?_t=8m7NMKpRjAD&_r=1" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                            <li><a href="https://www.instagram.com/neyootee?igsh=YzljYTk1ODg3Zg==" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>

                    </div>
                    <div class="col-md-6 col-lg-5  mt-2-9 offset-lg-1 wow fadeIn" data-wow-delay="200ms">
                        <h3 class="text-white h5 mb-1-9 ms-5">Contacts</h3>
                        <div class="d-flex mb-1-9">
                            <div class="flex-shrink-0"><img src="img/icons/icon-phone.png" alt="..."></div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="mb-1 h5 text-white">Contact Us</h4>
                                <p class="mb-0 text-white">08103108279</p>
                                <p class="mb-0 text-white">08118341899</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0"><img src="img/icons/icon-mail.png" alt="..."></div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="mb-1 h5 text-white">Mail Us</h4>
                                <p class="mb-0 text-white">neyoo.tee.tech@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4 border-top border-color-light-white">
                <div class="container">
                    <p class="text-white mb-0 text-center">&copy; <span class="current-year">2023</span> All rights reserved by <span class=" text-secondary primary-hover font-weight-500">Neyo & Tee Tech </span></p>
                </div>
            </div>
        </footer>

    </div>

  

    <!-- SCROLL TO TOP
    ================================================== -->
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- all js include start -->

    <script src="js/jquery.min.js"></script>

    
    <script src="js/popper.min.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

    
    <script src="js/core.min.js"></script>

    
    <script src="search/search.js"></script>

    <script src="js/main.js"></script>

    
    <script src="quform/js/plugins.js"></script>

    
    <script src="quform/js/scripts.js"></script>


</body>



</html>