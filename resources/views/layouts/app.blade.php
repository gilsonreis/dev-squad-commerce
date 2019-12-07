<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("title"){{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/animate.min.css') }}">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{ asset('theme/css/font-awesome.min.css') }}">
    <!-- Flaticon CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/css/font/flaticon.css') }}">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/owl.theme.default.min.css') }}">
    <!-- Main Menu CSS-->
    <link rel="stylesheet" href="{{ asset('theme/css/meanmenu.min.css') }}">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/select2.min.css') }}">
    <!-- Nouislider Style CSS -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/noUiSlider/nouislider.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('theme/style.css') }}">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/switch-style.css') }}">
    <!-- Modernizr Js -->
    <script src="{{ asset('theme/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
<div class="wrapper-area" id="app">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Header Area Start Here -->
    <header>
        <div class="header-area-style3" id="sticker">
            <div class="header-top">
                <div class="header-top-inner-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="header-contact">
                                    <ul>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="+1234567890"> + 123 456 7890</a></li>
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> info@metro.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="account-wishlist">
                                    <ul>
                                        <li><a href="login-registration.html"><i class="fa fa-lock" aria-hidden="true"></i> Account</a></li>
                                        <li><a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i> Wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> USD</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-top-inner-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="logo-area">
                                    <a href="{{ route('home') }}"><img class="img-responsive" src="{{ asset('theme/img/logo.png') }}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="search-area">
                                    <div class="input-group" id="adv-search">
                                        <input type="text" class="form-control" placeholder="Search Product" />
                                        <div class="input-group-btn">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-metro-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <ul class="header-cart-area">
                                    <li>
                                        <div class="cart-area">
                                            <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>0</span></a>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="additional-menu-area" id="additional-menu-area">
                                            <div id="mySidenav" class="sidenav">
                                                <a href="#" class="closebtn">×</a>
                                                <div class="sidenav-search">
                                                    <div class="input-group stylish-input-group">
                                                        <input type="text" placeholder="Search Here . . ." class="form-control">
                                                        <span class="input-group-addon">
											                        <button type="submit">
											                            <span class="glyphicon glyphicon-search"></span>
                                                            </button>
                                                            </span>
                                                    </div>
                                                </div>
                                                <ul class="sidenav-login-registration">
                                                    <li data-toggle="collapse" data-target="#login" class="collapsed">
                                                        <a href="#">Login<span class="arrow"></span></a>
                                                        <div class="collapse" id="login">
                                                            <div class="login-registration-field">
                                                                <form method="post">
                                                                    <label>Username or email address *</label>
                                                                    <input type="text">
                                                                    <label>Password *</label>
                                                                    <input type="password">
                                                                    <button value="Login" type="submit" class="btn-side-nav disabled">Login</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li data-toggle="collapse" data-target="#registration" class="collapsed">
                                                        <a href="#">Registration<span class="arrow"></span></a>
                                                        <div class="collapse" id="registration">
                                                            <div class="login-registration-field">
                                                                <form method="post">
                                                                    <label>User Name*</label>
                                                                    <input type="text">
                                                                    <label>E-mail address *</label>
                                                                    <input type="email">
                                                                    <label>Password *</label>
                                                                    <input type="password">
                                                                    <button value="Login" type="submit" class="btn-side-nav disabled">Register</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!-- times-->
                                            </div>
                                            <span class="side-menu-open side-menu-trigger"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="logo-area">
                                <a href="{{ route('home') }}"><img class="img-responsive" src="{{ asset('theme/img/logo.png') }}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8">
                            <div class="main-menu-area">
                                <nav>
                                    <ul>
                                        <li><a href="{{ route("home") }}">Home</a>

                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">Blog</a>

                                        </li>
                                        <li class="active"><a href="#">Pages</a>

                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area Start Here -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="#">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index2.html">Home 2</a></li>
                                                    <li><a href="index3.html">Home 3</a></li>
                                                    <li><a href="index4.html">Home 4</a></li>
                                                    <li><a href="index5.html">Home 5</a></li>
                                                    <li><a href="index6.html">Home 6</a></li>
                                                    <li><a href="index7.html">Home 7</a></li>
                                                    <li><a href="index8.html">Home 8</a></li>
                                                    <li><a href="index9.html">Home 9</a></li>
                                                    <li><a href="index10.html">Home 10</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Single Blog</a></li>
                                                    <li class="has-child-menu"><a href="#">Demo</a>
                                                        <ul class="thired-level">
                                                            <li><a href="#">Demo 1</a></li>
                                                            <li><a href="#">Demo 2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Portfolio</a>
                                                <ul>
                                                    <li><a href="portfolio1.html">Portfolio 1</a></li>
                                                    <li><a href="portfolio2.html">Portfolio 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="shop1.html">Shop 1</a></li>
                                                    <li><a href="shop2.html">Shop 2</a></li>
                                                    <li><a href="shop3.html">Shop 3</a></li>
                                                    <li><a href="shop4.html">Shop 4</a></li>
                                                    <li><a href="shop5.html">Shop 5</a></li>
                                                    <li><a href="shop6.html">Shop 6</a></li>
                                                    <li><a href="shop7.html">Shop 7</a></li>
                                                    <li><a href="product-details1.html">Shop Details 1</a></li>
                                                    <li><a href="product-details2.html">Shop Details 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="login-registration.html">Login Registration</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="check-out.html">Check Out</a></li>
                                                    <li><a href="order-history.html">Order History</a></li>
                                                    <li><a href="order-details.html">Order Details</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </div>
        </div>
    </header>
    <!-- Header Area End Here -->
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-area">
                        <h1>Electornics</h1>
                        <ul>
                            <li><a href="#">Home</a> /</li>
                            <li><a href="#">Category</a> /</li>
                            <li>Electornics</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Shop Page Area Start Here -->
    <div class="shop-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="sidebar hidden-after-desk">
                        <category-list-component></category-list-component>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row inner-section-space-top">
                        <!-- Tab panes -->
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page Area End Here -->
    <!-- Footer Area Start Here -->
    <footer>
        <div class="footer-area">
            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Information</h3>
                                <ul class="info-list">
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Manufacturers</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Terms & condition</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>My Account</h3>
                                <ul class="info-list">
                                    <li><a href="login-registration.html">My Account</a></li>
                                    <li><a href="login-registration.html">Login</a></li>
                                    <li><a href="wishlist.html">Order History</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="blog.html">Latest Post</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Product Tag</h3>
                                <ul class="tag-list">
                                    <li><a href="#">Winter</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Bag</a></li>
                                    <li><a href="#">Denime</a></li>
                                    <li><a href="#">Summer Style</a></li>
                                    <li><a href="#">Leather</a></li>
                                    <li><a href="#">Dress</a></li>
                                    <li><a href="#">Dress</a></li>
                                    <li><a href="#">Summer Style</a></li>
                                    <li><a href="#">Leather</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <h3>Stay With Us</h3>
                                <p>Tmply dummy text of the printing and typesetting industry nummy ever.</p>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="newsletter-area">
                                    <h3>NewsLetter Sign Up!</h3>
                                    <div class="input-group stylish-input-group">
                                        <input type="text" class="form-control" placeholder="E-mail . . .">
                                        <span class="input-group-addon">
							                        <button type="submit">
							                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
							                        </button>
							                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <p>© 2016 Metro All Rights Reserved. Designed by<a href="http://radiustheme.com" target="_blank"> RadiusTheme</a></p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <ul class="payment-method">
                                <li>
                                    <a href="#"><img src="img/payment-method1.jpg" alt="payment-method"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/payment-method2.jpg" alt="payment-method"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/payment-method3.jpg" alt="payment-method"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/payment-method4.jpg" alt="payment-method"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here -->
</div>
<!-- Modal Dialog Box Start Here-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-body">
            <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
            <div class="product-details1-area">
                <div class="product-details-info-area">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="inner-product-details-left">
                                <div class="tab-content">
                                    <div id="metro-related1" class="tab-pane fade active in">
                                        <a href="#"><img class="img-responsive" src="img/product/product-details1.jpg" alt="single"></a>
                                    </div>
                                    <div id="metro-related2" class="tab-pane fade">
                                        <a href="#"><img class="img-responsive" src="img/product/product-details1.jpg" alt="single"></a>
                                    </div>
                                    <div id="metro-related3" class="tab-pane fade">
                                        <a href="#"><img class="img-responsive" src="img/product/product-details1.jpg" alt="single"></a>
                                    </div>
                                </div>
                                <ul>
                                    <li class="active">
                                        <a aria-expanded="false" data-toggle="tab" href="#metro-related1"><img class="img-responsive" src="img/product/product-details4.jpg" alt="related1"></a>
                                    </li>
                                    <li>
                                        <a aria-expanded="false" data-toggle="tab" href="#metro-related2"><img class="img-responsive" src="img/product/product-details4.jpg" alt="related2"></a>
                                    </li>
                                    <li>
                                        <a aria-expanded="false" data-toggle="tab" href="#metro-related3"><img class="img-responsive" src="img/product/product-details4.jpg" alt="related3"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <div class="inner-product-details-right">
                                <h3>Product Title Here</h3>
                                <ul>
                                    <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                </ul>
                                <p class="price">$59.00</p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc amet risus consectetur, non consectetur nisl finibus. Ut ac eros quis mi volutpat cursus vel non risus.</p>
                                <div class="product-details-content">
                                    <p><span>SKU:</span> 0010</p>
                                    <p><span>Availability:</span> In stock</p>
                                    <p><span>Category:</span> Demo Products</p>
                                </div>
                                <ul class="product-details-social">
                                    <li>Share:</li>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                                </ul>
                                <ul class="inner-product-details-cart">
                                    <li><a href="#">Add To Cart</a></li>
                                    <li>
                                        <div class="input-group quantity-holder" id="quantity-holder">
                                            <input type="text" placeholder="1" value="1" class="form-control quantity-input" name="quantity">
                                            <div class="input-group-btn-vertical">
                                                <button type="button" class="btn btn-default quantity-plus"><i aria-hidden="true" class="fa fa-plus"></i></button>
                                                <button type="button" class="btn btn-default quantity-minus"><i aria-hidden="true" class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn-services-shop-now" data-dismiss="modal">Close</a>
        </div>
    </div>
</div>

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<!-- jquery-->
<script src="{{ asset('theme/js/vendor/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap js -->
<script src="{{ asset('theme/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- Owl Cauosel JS -->
<script src="{{ asset('theme/js/owl.carousel.min.js') }}" type="text/javascript"></script>
<!-- Meanmenu Js -->
<script src="{{ asset('theme/js/jquery.meanmenu.min.js') }}" type="text/javascript"></script>
<!-- WOW JS -->
<script src="{{ asset('theme/js/wow.min.js') }}" type="text/javascript"></script>
<!-- Plugins js -->
<script src="{{ asset('theme/js/plugins.js') }}" type="text/javascript"></script>
<!-- Countdown js -->
<script src="{{ asset('theme/js/jquery.countdown.min.js') }}" type="text/javascript"></script>
<!-- Srollup js -->
<script src="{{ asset('theme/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>
<!-- Switch js -->
<script src="{{ asset('theme/js/switch-style.js') }}" type="text/javascript"></script>
<!-- Actual Js -->
<script src="{{ asset('theme/js/jquery.actual.min.js') }}" type="text/javascript"></script>
<!-- Nouislider Js -->
<script src="{{ asset('vendor/noUiSlider/nouislider.min.js') }}" type="text/javascript"></script>
<!-- wNumb Js -->
<script src="{{ asset('theme/js/wNumb.js') }}" type="text/javascript"></script>
<!-- Custom Js -->
<script src="{{ asset('theme/js/main.js') }}" type="text/javascript"></script>
</body>

</html>
