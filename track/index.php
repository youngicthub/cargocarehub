<?php 
include '../db.php';

    if (isset($_POST['submit'])) {
        $tnumber = trim($_POST['tnumber']);
        $select = mysqli_query($link, "SELECT * FROM tracking WHERE tracking_number = '$tnumber' ");
        if (mysqli_num_rows($select) > 0) {
            session_start();
            $data = mysqli_fetch_assoc($select);
            $_SESSION['track'] = $data;
        }else{
            echo "<script>alert('Tracking Number Not Found')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codexpeed.com/html/CarGo Care Hub-html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2024 10:08:49 GMT -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title>CarGo Care Hub - Transport & Logistics </title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="../assets/img/logo1.png">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="../assets/css/icons.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!--  slick css plugins -->
    <link rel="stylesheet" href="../assets/css/slick.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="../assets/css/metismenu.css">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--  main style css file -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- template main style css file -->
    <link rel="stylesheet" href="style.css">
    
        <script src="//code.jivosite.com/widget/SKTOIJuZHp" async></script>

    
</head>

<body class="body-wrapper">    
    <!-- preloader -->
    <!-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">                
            </div>
                <div class="txt-loading">
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                       A
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="top-bar-wrapper d-none d-sm-block">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="top-left">
                <a href="tel:987-098-098-09"><i class="fal fa-phone-volume"></i>987-098-098-09</a>
                <a href="mailto:info@example.com"><i class="fal fa-envelope"></i>info@example.com</a>
                <a href="#"><i class="fal fa-map-marker-alt"></i>Cargo Hub, LD 32614, UK</a>
            </div>
            <div class="top-right d-none d-md-block">
                <div class="social-pages">
                    <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a> 
                    <a href="#"><i class="fab fa-skype" aria-hidden="true"></i></a> 
                </div>
            </div>
        </div>
    </div>
    <header class="header-1">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3 col-sm-5 col-md-4 col-6 pr-lg-5">
                    <div class="logo">
                        <a href="index.html">
                        <img src="../assets/img/logo1.png"  alt="CarGo Care Hub">       
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 text-end p-lg-0 d-none d-lg-flex justify-content-between align-items-center">
                    <div class="menu-wrap">
                        <div class="main-menu">
                            <ul>
                                <li><a href="../index.html">Home</a>
                                    
                                </li>
                                <li><a href="../about.html">About</a> </li>
                                <li><a href="../services.html">Services</a></li>
                                
                                <li><a href="../news.html">News</a></li>
                                <li><a href="../contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-right-element">
                        <a href="index.php" class="theme-btn">Track <i class="fal fa-long-arrow-right"></i></a>
                        <a href="#" class="search-btn"><i class="fal fa-search"></i></a>
                        <div class="search-box">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-block d-lg-none col-sm-1 col-md-8 col-6">
                    <div class="mobile-nav-wrap">
                        <div id="hamburger"><i class="fal fa-bars"></i></div>
                        <!-- mobile menu - responsive menu  -->
                        <div class="mobile-nav">
                            <button type="button" class="close-nav">
                                <i class="fal fa-times-circle"></i>
                            </button>
                            <nav class="sidebar-nav">
                                <ul class="metismenu" id="mobile-menu">
                                    <li><a class="has-arrow" href="../index.html">Homes</a>
                                        
                                    </li>
                                    <li><a href="../about.html">about</a></li>
                                    <li><a href="../services.html">services</a></li>
                                    
                                    <li><a href="../news.html">News</a></li>
                                    <li><a href="../contact.html">Contact</a></li>
                                </ul>
                            </nav>

                            <div class="action-bar text-white">
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-map-marked-alt"></i>
                                    </div>
                                    <div class="text">
                                        <h5>visit our location:</h5>
                                        <span>West Jakarta City, UK</span>
                                    </div>
                                </div>
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Opening Hours:</h5>
                                        <span>Mon-Fri 8am-5pm</span>
                                    </div>
                                </div>
                                <div class="single-info-element">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Send us mail</h5>
                                        <span>info@example.com</span>
                                    </div>
                                </div>
                                <div class="call-us">
                                    <div class="icon text-white">
                                        <i class="fal fa-phone-volume"></i>
                                    </div>
                                    <div class="text">
                                        <h5>Troll fre number</h5>
                                        <span>+09 949 858327</span>
                                    </div>
                                </div>
                                <a href="index.php" class="theme-btn mt-4">Track Your Shipment</a>
                            </div>
                        </div> 
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </header>

    <div class="page-banner-wrap text-center bg-cover" style="background-image: url('../assets/img/page-banner.jpg')">
        <div class="container">
            <div class="page-heading text-white">
                <h1>Tracking Details</h1>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="about-us-wrapper section-padding">
        <div class="container">
        <?php 
            if (isset($_SESSION['track']) && $_SESSION['track'] !== null) {
         ?>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <h3>Shipment Details / Information</h3>
                    </p>
                    <hr>
                </div>
                <div class="col-md-6">
                    <b>Welcome,</b>   | <a href="../index.html"> Back to Homepage </a>
                </div>
                <div class="col-md-6 text-right">
                    <h4><b>Tracking No : <?php echo $data['tracking_number'] ?></b>  </h4>
                </div>
                <hr>
                <br>
                <br>

                <div class="col-md-12 col-md-offset-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div style="background-color:#1f425d;" class="panel-heading p-2">
                                    <h4 style="color:#fff" class="panel-title">Sender's Details</h4>
                                </div>
                                <table class="table table-hover" id="dev-table">
                                    <tbody>
                                        <tr>
                                            <td><b>Name:</b> </td>
                                            <td> <?php echo $data['sender_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Contact:</b> </td>
                                            <td> <?php echo $data['sender_contact'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Email:</b> </td>
                                            <td> <?php echo $data['sender_email'] ?> </td>
                                        </tr>
                                        <tr>
                                            <td><b>Address:</b> </td>
                                            <td> <?php echo $data['sender_address'] ?> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div style="background-color:#1f425d;" class="panel-heading p-2">
                                    <h4 style="color:white;" class="panel-title">Receiver's Details</h4>
                                </div>
                                <table class="table table-hover" id="dev-table">
                                    <tbody>
                                        <tr>
                                            <td><b>Name:</b> </td>
                                            <td> <?php echo $data['receiver_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Contact:</b> </td>
                                            <td> <?php echo $data['receiver_contact'] ?> </td>
                                        </tr>
                                        <tr>
                                            <td><b>Email:</b> </td>
                                            <td><?php echo $data['receiver_email'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Address:</b></td>
                                            <td> <?php echo $data['receiver_name'] ?> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div style="background-color:#1f425d;" class="panel-heading p-2">
                        <h4 style="color:#fff" class="panel-title">More Details</h4>
                    </div>
                    <table class="table table-striped table-bordered table-condensed">
                        <tbody>
                            <tr>
                                <td class="text-right"><b>Dispatch Location </b></td>
                                <td> <?php echo $data['dispatch_location'] ?> </td>
                            </tr>
                  
                             <tr>
                                <td class="text-right"><b>Courier Status </b></td>
                                <td> <b> <?php echo $data['status'] ?> </b></td>
                            </tr> 
                            <tr>
                                <td class="text-right"><b>Dispatch Date </b></td>
                                <td> <?php echo $data['dispatch_date'] ?> </td>
                            </tr>
                            <tr>
                                <td class="text-right"><b>Estimated Delivery Date </b></td>
                                <td> <?php echo $data['dispatch_date'] ?> </td>
                            </tr>
                           
                            <tr>
                                <td class="text-right"><b>Current Location  <img src="../loading.gif" style="height: 30px; width: 50px"> </b></td>
                                <td class="col-xs-6"><marquee> <?php echo $data['current_location'] == "" ? $data['dispatch_location'] : $data['current_location'] ?> &nbsp; </marquee></td>
                            </tr>
                          
                            
                        </tbody> 
                    </table>
                </div>
                <div class="row d-flex align-items-stretch">
                    <div class="col-md-12 col-lg-12 col-xl-12 ">
                        <iframe class="map" src="https://maps.google.com/maps?q=Mount%20Pleasant,%20Breach%20Lane,%20Sittingbourne,%20ME9%207DB&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" style="border:0; width: 100%; height: 527px;"></iframe>
                    </div>
                </div>
                    
            </div>
            <div class="row">
                
            </div>
            
        <?php } ?>
            <div class="col-md-12 " style="margin: auto">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="post" style="margin bottom:50px">
                               
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Tracking Code" name="tnumber" value="" style="width:350px; background-color: lightgrey" >
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary">Track</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

  

 



    <footer class="footer-1 footer-wrap">
        <div class="footer-widgets-wrapper theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="about-CarGo Care Hub pe-md-5 pe-xl-0">
                            <a href="index.html">
                                <img src="../assets/img/logo1.png" alt="CarGo Care Hub">
                            </a>
                            <p style="color:white">CarGo Care Hub Logistics Services is a global supplier of transport and logistics solutions. We have offices in more than 20 countries and agents.</p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-2">
                        <div class="single-footer-wid ps-xl-4">
                            <div class="wid-title">
                                <h6>Our Divisions</h6>
                            </div>
                            <ul>
                                <li><a href="about.html">What We Do</a></li>
                                <li><a href="contact.html">Request a Freight</a></li>
                                <li><a href="services.html">Track & Trace</a></li>
                                <li><a href="services.html">Rail Freight</a></li>
                                <li><a href="services.html">Maritime Transport</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-2">
                        <div class="single-footer-wid ps-xl-2">
                            <div class="wid-title">
                                <h6>Our Services</h6>
                            </div>
                            <ul>
                                <li><a href="#">What We Do</a></li>
                                <li><a href="#">Request a Freight</a></li>
                                <li><a href="#">Track & Trace</a></li>
                                <li><a href="#">Rail Freight</a></li>
                                <li><a href="#">Maritime Transport</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-2">
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h6>Industry Sectors</h6>
                            </div>
                            <ul>
                                <li><a href="#">Electronics Industry</a></li>
                                <li><a href="#">Manufacturing</a></li>
                                <li><a href="#">Semicon & Solar</a></li>
                                <li><a href="#">Oil & Gas Cargo</a></li>
                                <li><a href="#">Energy & Chemicals</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="single-footer-wid site-info-widget">
                            <div class="wid-title">
                                <h6>Get In Touch</h6>
                            </div>
                            <div class="get-in-touch">
                                <div class="single-contact-info">
                                    <div class="icon id1">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>94 Roa Malaka, West Jakarta City, UK</span>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="icon id2">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>+91-7687287658</span>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="icon id3">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="contact-info">
                                        <span>info@example.com</span>
                                    </div>
                                </div>
                            </div>

                            <div class="newsletter_widget">
                                <div class="newsletter_box">
                                    <form action="#">
                                        <input type="email" placeholder="Enter email address" required>
                                        <button class="submit-btn" type="submit"><i class="fas fa-envelope-open"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container align-items-center">
                <div class="bottom-content-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="copy-rights">
                                <p>&copy;2024 <strong>CarGo Care Hub</strong>, All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2 mt-md-0 col-12 text-md-end">
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>   
    
    


    <!--  ALl JS Plugins
    ====================================== -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/modernizr.min.js"></script>
    <script src="../assets/js/jquery.easing.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/imageload.min.js"></script>
    <script src="../assets/js/scrollUp.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/slick-animation.min.js"></script>
    <script src="../assets/js/magnific-popup.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/metismenu.js"></script>
    <script src="../assets/js/active.js"></script>
</body>


<!-- Mirrored from codexpeed.com/html/CarGo Care Hub-html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2024 10:08:50 GMT -->
</html>