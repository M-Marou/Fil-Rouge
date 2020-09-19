<?php  session_start()?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Busicol</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                <a href="https://www.linkedin.com/in/marouane-moumni/">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="https://www.facebook.com/MarOneXIII">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="https://www.twitter.com/MarOneXIII">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                                <a href="https://www.instagram.com/marouane.mn">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-envelope"></i> mar@contact.com</a></li>
                                    <li><a href="#"> <i class="fa fa-phone"></i> +212-617-925475</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border white_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/MMlogo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.php">home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="Portfolio.php">Portfolio</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <?php if(isset($_SESSION['user_id'])): ?>
                                                <li><a href="admin.php">admin</a></li>
                                                <?php else : ?>
                                                    <?php endif; ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                <?php if(isset($_SESSION['user_id'])): ?>
                                    <div class="book_btn d-none d-lg-block">
                                        <a  href="includes/logout.php" >logout</a>
                                    </div>
                                    <?php else : ?>
                                        <div class="book_btn d-none d-lg-block">
                                        <a class="popup-with-form" href="#test-form">Login</a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

<!-- about  -->
<div class="about_area">
    <div class="container-fluid p-0">
        <div class="row no-gutters align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="about_image">
                    <img src="img/about/about.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about_info">
                    <h3>Hi, I am Maroune Moumni</h3>
                    <p>Hi ! My name is Marouane. I'm a web developer, graphic & 3d designer . <br> I have many years of experiences as a designer. I'm looking for a fun <br> and challenging project. I'm looking forward to bring you an interesting <br> visual solution.                        
                        </p>
                    <p>I work quickly and efficiently while producing high quality <br> work that my clients can be proud to show. I create websites & I design <br> logos, brochures, banners, book covers, apps, and everything in between.<br></p>
                    <p>I have one year of experience in 3D modeling through creating models <br> for game development.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ about  -->

    <!-- counter  -->
    <div class="counter_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3> <span class="counter" >183</span> <span>+</span> </h3>
                        <span>Total Projects</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3> <span class="counter" >5</span>  </h3>
                        <span>On Going Projects</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3> <span class="counter" >95</span> <span>%</span> </h3>
                        <span>Job Success</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ counter  -->

    <!-- project  -->
    <div class="project_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project_info text-center">
                        <h3>Do you Have any Project?</h3>
                        <p>Feel free to contact us anytime!</p>
                        <a href="contact.php" class="boxed-btn3-white">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ project  -->

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/MMlogo.png" alt="">
                                </a>
                            </div>
                            <p>
                                Check us on social media as well!
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/MarOneXIII">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/MarOneXIII">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/marouane.mn">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Services
                            </h3>
                            <ul>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Graphic Design</a></li>
                                <li><a href="#">3D Modeling</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Portfolio </a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Address
                            </h3>
                            <ul>
                                    <li>Qu Mohammadi, Rue Chaouia N°7, Youssoufia, Morocco.</li>
                                    <li>+212-617-925475</li>
                                    <li><a href="#">mar@contact.com</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" action='includes/login.php' method='post' class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="popup_header">
                    <h3>Login</h3>
                </div>
                <div class="custom_form">
                        <div class="row">
                                <div class="col-xl-12">
                                    <input type="text" name='username' placeholder="Username">
                                </div>
                                <div class="col-xl-12">
                                    <input type="password" name='password' placeholder="Password">
                                </div>
                                <div class="col-xl-12">
                                    <button name='login_user'  type="submit" class="boxed-btn3">Login</button>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>