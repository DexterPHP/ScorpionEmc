<!DOCTYPE html>
<html lang="{{(Cookie::get('lang') == 'en' ? 'en': 'ar') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="موقع سكوربيون موقع تسويق إلكتروني">
    <meta name="keywords" content="سوق,بيع,شراء,آجار,توصيل,حسومات,تسويق">
    <meta name="author" content="Mohammmad Khalaf">
    <title>Shop | Scorpion Emc </title>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('rs-plugin\css\settings.css')}}" media="screen">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css\bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css\font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css\ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('css\main.css')}}" rel="stylesheet">
    <link href= {{(Cookie::get('lang') == 'en' ? asset('css\style.css'): asset('css\style_rtl.css')) }} rel="stylesheet">
    <link href="{{asset('css\responsive.css')}}" rel="stylesheet">
    <link href="{{asset('font\flaticon.css')}}" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="{{asset('js\modernizr.js')}}"></script>

    <!-- Online Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Poppins:300,400,500,600,700|Montserrat:300,400,500,600,700,800" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Cairo:400,500,600,700%7CPoppins:400,400i,500,600&display=swap" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- LOADER -->
<div id="loader">
    <div class="position-center-center">
        <div class="ldr"></div>
    </div>
</div>

<!-- Wrap -->
<div id="wrap">
    <div class="top-bar">
        <div class="container-full">
            <p><i class="icon-envelope"></i> scorpion.emc.group.sup@gmail.com </p>
            <p class="call"> <i class="icon-call-in"></i> Tele Syria : (963) 945 235 962 </p>
        </div>
    </div>
<!--########################### Shooping Card Content ###########################-->
    <!-- Nav Chart Updated
    <nav id="cd-lateral-nav">
        <div class="cd-navigation">
            <div class="inside-cart">
                <div class="position-center-center">
                    <h5>Shopping Cart</h5>
                    <ul>
                        <li>
                            <div class="media-left">
                                <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images\cart-img-1.jpg" alt="..."> </a> </div>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading">Rise Skinny Jeans</h6>
                                <span class="price">129.00 USD</span> <br>
                                <span class="qty">QTY: 01</span> </div>
                        </li>
                        <li>
                            <div class="media-left">
                                <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images\cart-img-2.jpg" alt="..."> </a> </div>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading">Mid Rise Skinny Jeans</h6>
                                <span class="price">129.00 USD</span> <br>
                                <span class="qty">QTY: 01</span> </div>
                        </li>
                        <li class="totl">
                            <h5 class="text-left">SUBTOTAL: <small> 258.00 USD </small></h5>
                        </li>
                    </ul>
                    <a href="shopping-cart.html" class="btn">VIEW CART</a> <a href="checkout.html" class="btn">CHECK OUT</a> </div>
            </div>
        </div>
    </nav>
    -->
<!--########################### Shooping Card Content ###########################-->
    <!-- header -->
    <header class="sticky head-absul">
        <div class="container-full">

            <!-- Logo -->
            <div class="logo">
                <a href="./">
                    <img class="img-responsive" src="images\logo.svg" alt="">
                </a>
            </div>
            <!-- //Logo -->

            <nav class="navbar ownmenu navbar-expand-lg">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span> </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav">
                        <li> <a href="./">Home</a> </li>

                        <!-- MEGA MENU -->
                        <li class="dropdown megamenu"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Mega Store</a>
                            <div class="dropdown-menu">
                                <div class="row">
                                    <!-- Shop Pages -->
                                    <div class="col-md-5">
                                        <h6>Shop Pages</h6>
                                        <ul class="col-2-li">
                                            <li> <a href="shop_02.html">Shop Full Left Sidebar</a> </li>
                                            <li> <a href="shop_03.html">Shop Shop Right Sidebar </a> </li>
                                            <li> <a href="shop_04.html">Shop Creative Layout </a> </li>
                                            <li> <a href="shop_01.html">Shop </a></li>
                                            <li> <a href="shop_6_col.html">Shop 06 Col </a> </li>
                                            <li> <a href="shop_5_col.html">Shop 05 Col </a> </li>
                                            <li> <a href="shop_4_col.html">Shop 04 Col </a> </li>
                                            <li> <a href="shop_3_col.html">Shop 03 Col </a> </li>
                                            <li> <a href="product-detail_01.html">Products Detail 01</a> </li>
                                            <li> <a href="product-detail_02.html">Products Detail 02</a> </li>
                                            <li> <a href="product-detail_03.html">Products Detail 03</a> </li>
                                            <li> <a href="shopping-cart.html">Shopping Cart</a> </li>
                                            <li> <a href="checkout.html">Checkout</a> </li>
                                            <li> <a href="about-us_01.html">About Us</a> </li>
                                            <li> <a href="contact.html">Contact</a> </li>
                                            <li> <a href="blog-list_01.html">Blog List 01</a> </li>
                                            <li> <a href="blog-detail_01.html">Blog Detail 01 </a> </li>
                                        </ul>
                                    </div>

                                    <!-- Shop Pages -->
                                    <div class="col-md-3">
                                        <h6>Latest items</h6>
                                        <ul>
                                            <li> <a href="index-2.html"> Deodornts</a></li>
                                            <li> <a href="index-2.html"> Skin care</a></li>
                                            <li> <a href="index-2.html"> Make up</a></li>
                                            <li> <a href="index-2.html"> Watch</a></li>
                                            <li> <a href="index-2.html"> Siting bags</a></li>
                                            <li> <a href="index-2.html"> Totes</a></li>
                                            <li> <a href="index-2.html"> Gold rings</a></li>
                                            <li> <a href="index-2.html"> Jewellery</a> </li>
                                        </ul>
                                    </div>

                                    <!-- Top Rate -->
                                    <div class="col-md-4">
                                        <h6>Top Rate Products</h6>
                                        <div class="top-rated">
                                            <ul>
                                                <li>
                                                    <div class="media-left">
                                                        <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images\cart-img-1.jpg" alt="..."> </a> </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Best T-Shirt Design</h6>
                                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                        <span class="price">129.00 USD</span> </div>
                                                </li>
                                                <li>
                                                    <div class="media-left">
                                                        <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images\cart-img-2.jpg" alt="..."> </a> </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Bag Pack for Child</h6>
                                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                        <span class="price">129.00 USD</span> </div>
                                                </li>
                                                <li>
                                                    <div class="media-left">
                                                        <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images\cart-img-3.jpg" alt="..."> </a> </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Bag Pack for Child</h6>
                                                        <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                                        <span class="price">129.00 USD</span> </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- MEga Menu Elements -->
                                <div class="mega-menu-elements"> <img src="images\nav-img.png" alt=""> <a href="#." class="btn btn-inverse">Shop Now</a> </div>
                            </div>
                        </li>
                        <li> <a href="/contact"> contact</a> </li>
                    </ul>
                </div>

                <!-- Nav Right -->
                <div class="nav-right">
                    <ul class="navbar-right">
                        @auth
                            <!-- USER INFO -->
                            <li> <a href="/profile"><i class="lnr lnr-user"></i> </a></li>
                            <!-- USER BASKET -->
                            <li> <a id="cd-menu-trigger" href="#0"><i class="lnr lnr-cart"></i><span class="c-no">2</span> </a> </li>
                        @else

                                <!-- USER INFO -->
                                <li> <a href="/register"><i class="fa fa-user-plus"></i> </a></li>

                        @endauth
                    <!-- SEARCH BAR -->
                        <li> <a href="javascript:void(0);" class="search-open"><i class="lnr lnr-magnifier"></i></a>
                            <div class="search-inside animated bounceInUp"> <i class="icon-close search-close"></i>
                                <div class="search-overlay"></div>
                                <div class="position-center-center">
                                    <div class="search">
                                        <form>
                                            <input type="search" placeholder="Search Shop">
                                            <button type="submit"><i class="icon-"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="clearfix"></div>
    </header>

    <!-- Main Layout -->
    <main class="cd-main-content">

        <!-- HOME MAIN  -->
        <section class="simple-head" data-stellar-background-ratio="0.5">
            <div class="position-center-center">
                <!-- Container Fluid -->
                <div class="container-full">
                    <!-- Header Text -->
                    <div class="text-left col-lg-8 no-padding"> <span class="price"><small>$</small>299.99</span>
                        <h4>The Latest Winter Products for 2018</h4>
                        <h1 class="extra-huge-text">look hot with 2018 style</h1>
                        <div class="text-btn"> <a href="#." class="btn btn-inverse margin-top-40">SHOP NOW</a> </div>
                    </div>
                </div>
            </div>
        </section>
