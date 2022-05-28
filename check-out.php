<?php
      include  'connect.php';

      $data =  $conn->query("SELECT * FROM room INNER JOIN reservation ON room.id=reservation.id WHERE c.State = 'NY'
      AND a.Status = 1 ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Index 4</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-lotusicon.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/settings.css">
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/helper.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]>
<body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<body> <!--<![endif]-->


<!-- PRELOADER -->
<div id="preloader">
    <span class="preloader-dot"></span>
</div>
<!-- END / PRELOADER -->

<div id="page-wrap" class="bg-white-2">
    <!-- HEADER -->
        <!-- HEADER -->
        <header id="header" class="header-v3 clearfix">

            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        <span><i class="lotus-icon-location"></i> 225 Beach Street, Australian</span>
                        <span><i class="lotus-icon-phone"></i> 1-548-854-8898</span>
                    </div>
    
                    <div class="header_right float-right">
                        <span class="socials">
                            <a href="!#"><i class="fa fa-facebook"></i></a>
                            <a href="!#"><i class="fa fa-twitter"></i></a>
                            <a href="!#"><i class="fa fa-instagram"></i></a>
                        </span>
                        <span class="login-register">
                                <a href="login.html">Login</a>
                                <a href="register.html">register</a>
                            </span>
                        <!--<div class="dropdown currency">
                            <span>USD <i class="fa fa"></i></span>
                            <ul>
                                <li class="active"><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                            </ul>
                        </div>
                        <div class="dropdown language">
                            <span>ENG</span>
    
                            <ul>
                                <li class="active"><a href="#">ENG</a></li>
                                <li><a href="#">FR</a></li>
                            </ul>
                        </div>-->
                    </div>
                    <!-- HEADER LOGO -->
                    <a class="logo-top img-responsive" href="#"><img src="images/logo-header.png" alt=""></a>
                    <!-- END / HEADER LOGO -->
    
                </div>
            </div>
            <!-- END / HEADER TOP -->
    
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">
    
                <div class="container">
    
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="#"><img src="images/logo-header.png" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                            <ul class="menu">
                                <li class="current-menu-item">
                                    <a href="index.html">Home </a>
                                   <!-- <ul class="sub-menu">
                                        <li class="current-menu-item"><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index.html">Home 4</a></li>
                                    </ul>
                                </li>-->
                                
                                <li>
                                    <a href="#">Room <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="room.html">Room</a></li>
                                        
                                        <!--
                                        <li><a href="room-2.html">Room 2</a></li>
                                        <li><a href="room-1.html">Room 1</a></li>
                                        <li><a href="room-4.html">Room 4</a></li>
                                        <li><a href="room-5.html">Room 5</a></li>
                                        <li><a href="room-6.html">Room 6</a></li>
                                        -->
                                        <li><a href="room-detail.html">Room Detail</a></li>
                                    </ul>
                                </li>
                                <!--<li>
                                    <a href="restaurants-4.html">Restaurant </a>
                                    
                                    <a href="#">Restaurant <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="restaurants-1.html">Restaurant 1</a></li>
                                        <li><a href="restaurants-2.html">Restaurant 2</a></li>
                                        <li><a href="restaurants-3.html">Restaurant 3</a></li>
                                      
                                    </ul>
                                </li>-->
                                <li>
                                    <a href="reservation-step-1.php">Reservation <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="reservation-step-1.html">Reservation Step 1</a></li>
                                        <li><a href="reservation-step-2.html">Reservation Step 2</a></li>
                                        <li><a href="reservation-step-3.html">Reservation Step 3</a></li>
                                        <li><a href="reservation-step-4.html">Reservation Step 4</a></li>
                                        <li><a href="reservation-step-5.html">Reservation Step 5</a></li>
                                    </ul>
                                </li>
                                <li>
                                              <a href="check-out.php">Check Out</a>
    
                                  <!-- <a href="#">Page <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#">Guest Book <span class="fa fa-caret-right"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="guest-book.html">Guest Book 1</a></li>
                                                <li><a href="guest-book-2.html">Guest Book 2</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a href="#">Event <span class="fa fa-caret-right"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="events.html">Events</a></li>
                                                <li><a href="events-fullwidth.html">Events Fullwidth</a></li>
                                                <li><a href="events-detail.html">Events Detail</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="attractions.html">Attractions</a>
                                        </li>
                                        <li>
                                            <a href="#">Term Condition <span class="fa fa-caret-right"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="term-condition.html">Term Condition 1</a></li>
                                                <li><a href="term-condition-2.html">Term Condition 2</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="">Activiti <span class="fa fa-caret-down"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="activiti.html">Activiti</a></li>
                                                <li><a href="activiti-detail.html">Activiti Detail</a></li>
                                            </ul>
                                        </li>
                            
                                        <li><a href="shortcode.html">ShortCode</a></li>
                                        <li><a href="page-404.html">404 Page</a></li>
                                        <li><a href="comingsoon.html">Comming Soon</a></li>
                                    </ul>-->
                                </li>
                                <!--<li>
                                    <a href="gallery-2.html">Gallery </a>
                                    <!--<ul class="sub-menu">
                                          <li><a href="gallery.html">Gallery Style 1</a></li>
                                        <li><a href="gallery-2.html">Gallery Style 2</a></li>
                                        <li><a href="gallery-3.html">Gallery Style 3</a></li> 
                                    </ul>
                                </li>-->
                               <!-- <li>
                                    <a href="#">Blog <span class="fa fa-caret-down"></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                        <li><a href="blog-detail-fullwidth.html">Blog Detail Fullwidth</a></li>
                                    </ul>
                                </li>-->
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="about.html">About</a></li>
    
                            </ul>
                        </nav>
                    <!-- END / HEADER MENU -->
    
                    <!-- MENU BAR -->
                    <span class="menu-bars">
                            <span></span>
                        </span>
                    <!-- END / MENU BAR -->
    
                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->
    
        </header>
    <!-- END / HEADER -->
        
        <!-- SUB BANNER -->
        <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>CheckOut</h2>
                        <p>Thank You For Staying & Chosing Us</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->
        
        <!-- BLOG -->
        <section class="section-checkout">
            <div class="container">
                <div class="checkout">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="checkout_head">
                                <h3>BILLING DETAILS</h3>
                                <span>Please Type Your Details Under Here:</span>
                            </div>

                            <div class="checkout_form">

                                <div class="row">

                                    <div class="col-xs-6 col-sm-6">
                                        <label>First Name*</label>
                                        <input type="text" class="field-text">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Last Name*</label>
                                        <input type="text" class="field-text">
                                    </div>



                                    <div class="col-xs-12 col-sm-12">
                                        <label>Address*</label>
                                        <input type="text" class="field-text" placeholder="Street Address">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Email Address*</label>
                                        <input type="text" class="field-text">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Phone*</label>
                                        <input type="text" class="field-text">
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>Account Password*</label>
                                        <input type="password" class="field-text">
                                    </div>

                                </div>

                            </div>
                        </div> 

                        <div class="col-md-6">

                            <div class="checkout_head checkout_margin">
                                <h3>Your payment details</h3>
                            </div>

                            <div class="checkout_form checkout_margin">
                            
                                <div class="checkout_cart">

                                    <!-- ITEM -->
                                    <div class="cart-item">
                                        <div class="img">
                                            <a href="#"><img src="images/cart/img-1.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <a href="#">Luxury Room</a>
                                            <p><span>2 days  - 6 rooms</span> <b>$1960</b></p>
                                        </div>
                                        <a href="#" class="remove"><i class="fa fa-close"></i></a>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="cart-item">
                                        <div class="img">
                                            <a href="#"><img src="images/cart/img-2.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <a href="#">Standard Room</a>
                                            <p><span>2 days  - 3 rooms</span> <b>$960</b></p>
                                        </div>
                                        <a href="#" class="remove"><i class="fa fa-close"></i></a>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="cart-item">
                                        <div class="img">
                                            <a href="#"><img src="images/cart/img-3.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <a href="#">Couple Room</a>
                                            <p><span>2 days  - 2 rooms</span> <b>$900</b></p>
                                        </div>
                                        <a href="#" class="remove"><i class="fa fa-close"></i></a>
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                                <div class="checkout_cartinfo">
                                    <p><span>Cart Subtotal:</span> $1080</p>
                                    <p><span>Shipping:</span> Free Shipping</p>
                                    <p><span>Order Total:</span> <span class="color-red">$1080</span></p>
                                </div> 
                                
                                <div class="checkout_option">
                                    <ul>
                                        <li>
                                            <input type="radio" class="radio payment-methor" name="payment">
                                            <h6>Direct Bank Transfer</h6>
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </li>
                                        <li>
                                            <input type="radio" class="radio payment-methor" name="payment"> 
                                            <h6>Cheque Payment</h6>
                                        </li>
                                        <li>
                                            <input type="radio" class="radio payment-methor" name="payment"> 
                                            <h6>Credit Card</h6>
                                            <img src="images/icon-card.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>

                                <div class="checkout_btn">
                                    <button class="awe-btn awe-btn-13 btn-order">PLACE ORDER</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END / BLOG -->

        <!-- FOOTER -->
        <footer id="footer">

            
<!-- FOOTER -->
<footer id="footer">

    <!-- FOOTER CENTER -->
    <div class="footer_center">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-lg-5">
                    <div class="widget widget_logo">
                        <div class="widget-logo">
                            <div class="img">
                                <a href="#"><img src="images/logo-footer.png" alt=""></a>
                            </div>
                            <div class="text">
                                <p><i class="lotus-icon-location"></i> 225 Beach Street, Australian</p>
                                <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@thelotushotel.com">hello@thelotushotel.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">Page site</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="room.html">Room</a></li>
                            <li><a href="reservation-step-1.html">Reservation</a></li>
                            <li><a href="check-out.php">Check-Out</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">ABOUT</h4>
                        <ul>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="about.html">About</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-4 col-lg-3">
                    <div class="widget widget_tripadvisor">
                        <h4 class="widget-title">Tripadvisor</h4>
                        <div class="tripadvisor">
                            <p>Now with hotel reviews by</p>
                            <img src="images/tripadvisor.png" alt="">
                            <span class="tripadvisor-circle">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i class="part"></i>
                            </span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- END / FOOTER CENTER -->

    <!-- FOOTER BOTTOM -->
    <div class="footer_bottom">
        <div class="container">
            <p>&copy; 2015 Lotus Hotel All rights reserved.</p>
        </div>
    </div>

<!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>