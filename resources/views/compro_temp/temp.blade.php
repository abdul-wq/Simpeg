
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title', 'Selamat Datang pak!') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    @yield('css')
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('hus/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('hus/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('hus/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('hus/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('hus/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('hus/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('hus/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('hus/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('hus/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('hus/css/slicknav.css')}}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{asset('hus/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    @yield('header')
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-md-12 col-lg-2">
                            <div class="logo">
                                <!-- <a href="/">
                                    <img src="{{asset('hus/img/logo.png')}}" alt="">
                                </a> -->
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="/">HOME</a></li>
                                        <li><a href="#about">ABOUT</a></li>
                                        <li><a href="#project">PROJECT</a>
                                        <li><a href="#tim">OUR TEAM</a>
                                        <li><a href="#galeri">GALERY</a>
                                        </li>
                                        <li><a href="#kontak">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="social_wrap d-flex align-items-center justify-content-end">
                                <div class="login_text">
                                    <a href="/login">LOGIN</a>
                                </div>
                                <div class="number">
                                    <p>Call us <a href="#">+62816655958</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

@yield('konten')
  <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-8">
                            <div class="slider_text">
                                <span></span>
                                <h3>We Create
                                    your deam
                                    appartment</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipilit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis.</p>
                                <a href="#project" class="boxed-btn3">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-8">
                            <div class="slider_text">
                                <span></span>
                                <h3>We Create
                                    your deam
                                    appartment</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipilit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis.</p>
                                <a href="#project" class="boxed-btn3">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-8">
                            <div class="slider_text">
                                <span></span>
                                <h3>We Create
                                    your deam
                                    appartment</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipilit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Quis.</p>
                                <a href="#" class="boxed-btn3">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start  -->
    <div id="about">
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about_exp d-flex align-items-center justify-content-center">
                        <div class="about_exp_inner_upper d-flex align-items-center justify-content-center">
                            <div class="about_exp_inner text-center">
                                <span>10</span>
                                <p>Years of Exprince</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_info pl-70">
                        <div class="section_title mb-55">
                            <h3>We are Hus <br>
                                <span>Realestate Company</span></h3>
                            <div class="devider">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="info_inner">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipisicing elit, sed do</li>
                                <li>Eiusmod tempor incididunt ut labore</li>
                                <li>Ad minim veniam, quis nostrud.</li>
                            </ul>
                            <div class="customer_info d-flex">
                                <div class="single_info d-flex align-items-baseline">
                                    <span class="counter">120</span>
                                    <p>Buildings</p>
                                </div>
                                <div class="single_info d-flex align-items-baseline">
                                    <span ><span class="counter">500</span>+</span>
                                    <p>Clients</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end  -->

    <!-- our_facilitics_area_start  -->
<div id="project">
    <div class="our_facilitics_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center white_title mb-80">
                        <h3>OUR PROJECT</h3>
                        <div class="devider">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-sketch"></i>
                        </div>
                        <h3>Planning Stage</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-hotel"></i>
                        </div>
                        <h3>Planning Stage</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-headset"></i>
                        </div>
                        <h3>Planning Stage</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_facilitics_area_end  -->
     <!-- property_certificates_start  -->
<div id="galeri">
    <div class="our_latest_news_area">
<!--         <div class="container"> -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <h3>OUR GALERY</h3>
                        <div class="devider">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>

    <!-- appertment_area_start  -->
    <div class="appertment_area">
        <div class="appertment_active owl-carousel">
            <div class="single_appertment">
                <div class="thumb">
                    <img src="{{asset('hus/img/appertment/1.png')}}" alt="">
                </div>
                <div class="appertment_info">
                    <span>$35.000</span>
                    <a href="#">
                        <h5>Colorful little aprtment</h5>
                    </a>
                    <ul>
                        <li>2BD</li>
                        <li>2BA</li>
                        <li>920 SF</li>
                    </ul>
                </div>
            </div>
            <div class="single_appertment">
                <div class="thumb">
                    <img src="{{asset('hus/img/appertment/2.png')}}" alt="">
                </div>
                <div class="appertment_info">
                    <span>$35.000</span>
                    <a href="#">
                        <h5>Colorful little aprtment</h5>
                    </a>
                    <ul>
                        <li>2BD</li>
                        <li>2BA</li>
                        <li>920 SF</li>
                    </ul>
                </div>
            </div>
            <div class="single_appertment">
                <div class="thumb">
                    <img src="{{asset('hus/img/appertment/3.png')}}" alt="">
                </div>
                <div class="appertment_info">
                    <span>$35.000</span>
                    <a href="#">
                        <h5>Colorful little aprtment</h5>
                    </a>
                    <ul>
                        <li>2BD</li>
                        <li>2BA</li>
                        <li>920 SF</li>
                    </ul>
                </div>
            </div>
            <div class="single_appertment">
                <div class="thumb">
                    <img src="{{asset('hus/img/appertment/1.png')}}" alt="">
                </div>
                <div class="appertment_info">
                    <span>$35.000</span>
                    <a href="#">
                        <h5>Colorful little aprtment</h5>
                    </a>
                    <ul>
                        <li>2BD</li>
                        <li>2BA</li>
                        <li>920 SF</li>
                    </ul>
                </div>
            </div>
            <div class="single_appertment">
                <div class="thumb">
                    <img src="{{asset('hus/img/appertment/2.png')}}" alt="">
                </div>
                <div class="appertment_info">
                    <span>$35.000</span>
                    <a href="#">
                        <h5>Colorful little aprtment</h5>
                    </a>
                    <ul>
                        <li>2BD</li>
                        <li>2BA</li>
                        <li>920 SF</li>
                    </ul>
                </div>
            </div>
            <div class="single_appertment">
                <div class="thumb">
                    <img src="{{asset('hus/img/appertment/3.png')}}" alt="">
                </div>
                <div class="appertment_info">
                    <span>$35.000</span>
                    <a href="#">
                        <h5>Colorful little aprtment</h5>
                    </a>
                    <ul>
                        <li>2BD</li>
                        <li>2BA</li>
                        <li>920 SF</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </div>
</div>
    <!-- appertment_area_end  -->
    
    <!-- testimonial_area  -->
<div id="tim">
    <div class="our_latest_news_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <h3>OUR TEAM</h3>
                        <div class="devider">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{asset('hus/img/testmonial/author.png')}}" alt="">
                                        </div>
                                        <div class="testmonial_author">
                                            <h3>Margaret Lawson</h3>
                                            <span>Creative Director</span>
                                        </div>
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{asset('hus/img/testmonial/author2.png')}}" alt="">
                                        </div>
                                        <div class="testmonial_author">
                                            <h3>Margaret Lawson</h3>
                                            <span>Creative Director</span>
                                        </div>
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{asset('hus/img/testmonial/author2.png')}}" alt="">
                                        </div>
                                        <div class="testmonial_author">
                                            <h3>Margaret Lawson</h3>
                                            <span>Creative Director</span>
                                        </div>
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
    <!-- /testimonial_area  -->
    <!-- quotation_area_start  -->
    <div class="quotation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quotation_text d-flex align-items-center justify-content-between">
                        <div class="quotation_info">
                            <h3>Get a free <br>
                                quotation Today!</h3>
                                <p>Have any questions in mind?</p>
                            <a href="#kontak" class="boxed-btn3">Contact Us</a>
                        </div>
                        <div class="sayhello d-flex align-items-center">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="num">
                                <span>say Hello,</span>
                                <h3>+44 563 986 4785 </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@yield('footer')
    <!-- footer_start  -->
<div id="kontak">
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget ">
                            <h3 class="footer_title">
                                About Us
                            </h3>
                            <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{asset('hus/img/footer_logo.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget ">
                            <h3 class="footer_title">
                                Contact Info
                            </h3>
                            <p>Address :Your address goes
                                here, your demo address.</p>
                            <ul>
                                <li><a href="#">Phone : +8880 44338899</a></li>
                                <li><a href="#">Email : info@colorlib.com</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget ">
                            <h3 class="footer_title">
                                Important Link
                            </h3>
                            <ul>
                                <li><a href="#">View Project</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Testimonial</a></li>
                                <li><a href="#">Proparties</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Newsletter
                            </h3>
                            <p class="newsletter_text">
                                Heaven fruitful doesn't over lesser in days. Appear creeping seasons
                            </p>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit"> <i class="fa fa-paper-plane"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="copy_right">
                            <p class="text-center">&copy; 2020 | Safitri</p>
                        </p>
                    </div>
          
</footer>
    <!-- footer_end  -->

@yield('js')
    <!-- JS here -->
    <script src="{{asset('hus/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('hus/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('hus/js/popper.min.js')}}"></script>
    <script src="{{asset('hus/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('hus/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('hus/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('hus/js/ajax-form.js')}}"></script>
    <script src="{{asset('hus/js/waypoints.min.js')}}"></script>
    <script src="{{asset('hus/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('hus/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('hus/js/scrollIt.js')}}"></script>
    <script src="{{asset('hus/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('hus/js/wow.min.js')}}"></script>
    <script src="{{asset('hus/js/nice-select.min.js')}}"></script>
    <script src="{{asset('hus/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('hus/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('hus/js/plugins.js')}}"></script>
    <script src="{{asset('hus/js/gijgo.min.js')}}"></script>
    <script src="{{asset('hus/js/slick.min.js')}}"></script>
   

    
    <!--contact js-->
    <script src="{{asset('hus/js/contact.js')}}"></script>
    <script src="{{asset('hus/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('hus/js/jquery.form.js')}}"></script>
    <script src="{{asset('hus/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('hus/js/mail-script.js')}}"></script>


    <script src="{{asset('hus/js/main.js')}}"></script>

</body>

</html>