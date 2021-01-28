<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Electronics - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="ezone/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('ezone/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('ezone/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('ezone/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('ezone/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('ezone/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('ezone/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('ezone/css/icofont.css')}}">
    <link rel="stylesheet" href="{{ asset('ezone/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{ asset('ezone/css/bundle.css')}}">
    <link rel="stylesheet" href="{{ asset('ezone/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('ezone/css/responsive.css')}}">
    <script src="{{ asset('ezone/js/vendor/modernizr-2.8.3.min.js')}}"></script>


</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- header start -->
    <!--Notification Section-->
    @if (!Auth::check())
    <div class="notification-section notification-section-padding  notification-img ptb-10">
        <div class="container-fluid">
            <div class="notification-wrapper">
                <div class="notification-pera-graph">
                    <p>Please login first for best browsing experience.</p>
                </div>
                <div class="notification-btn-close">
                    <div class="notification-btn">
                        <a href="{{ route('login') }}">Login Now</a>
                    </div>
                    <div class="notification-close notification-icon">
                        <button><i class="pe-7s-close"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    


    <header>
        <div class="header-top-wrapper-2 border-bottom-2">
            <div class="header-info-wrapper pl-200 pr-200">
                <div class="header-contact-info">
                    <ul>
                        <li><i class="pe-7s-call"></i><a href="tel:+91 7003373754">+91 7003 373 754</a></li>
                        <li><i class="pe-7s-mail"></i><a href="mailto:contact@computer-reflex.tk">contact@computer-reflex.tk</a></li>
                    </ul>
                </div>
                <div class="electronics-login-register">
                    <ul>
                        @if (!Auth::check())
                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>Login</a></li>
                        @else

                        @can('Admin')
                            <li><a href="{{route('admin-dashboard')}}"><i class="fa fa-desktop"></i>Admin</a>
                        @endcan
                            <li><a href="#"><i class="pe-7s-users"></i>My Account</a>
                            <ul>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">My Wishlists</a></li>
                                <li><a href="{{ route('logout')}}">Logout</a></li>
                            </ul>
                            </li>
                        @endif
                        
                        
                        <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="pe-7s-headphones"></i>Support</a></li>
                        <li><a href="wishlist.html"><i class="pe-7s-like"></i>Wishlist</a></li>
                        <li><a href="#"><i class="pe-7s-flag"></i>IN</a></li>
                        <li><a class="border-none" href="#"><span>₹</span>INR</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom pt-40 pb-30 clearfix">
            <div class="header-bottom-wrapper pr-200 pl-200">
                <div class="logo-3">
                    <a href="index.html">
                        <img src="{{ asset('ezone/img/logo/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="categories-search-wrapper">
                    
                    <div class="categories-wrapper">
                        <form action="#">
                            <input placeholder="Enter Your key word" type="text">
                            <button type="button"> Search </button>
                        </form>
                    </div>
                </div>
                <div class="trace-cart-wrapper">
                    <div class="categories-cart same-style">
                        <div class="same-style-icon">
                            <a href="#"><i class="pe-7s-cart"></i></a>
                        </div>
                        <div class="same-style-text">
                            <a href="cart.html">My Cart <br>02 Item</a>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a>
                                    <ul>
                                        <li><a href="index.html">Fashion</a></li>
                                        <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                        <li><a href="index-fruits.html">Fruits</a></li>
                                        <li><a href="index-book.html">book</a></li>
                                        <li><a href="index-electronics.html">electronics</a></li>
                                        <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                        <li><a href="index-food.html">food & drink</a></li>
                                        <li><a href="index-furniture.html">furniture</a></li>
                                        <li><a href="index-handicraft.html">handicraft</a></li>
                                        <li><a href="index-smart-watch.html">smart watch</a></li>
                                        <li><a href="index-sports.html">sports</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">pages</a>
                                    <ul>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="menu-list.html">menu list</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">shop</a>
                                    <ul>
                                        <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                        <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                        <li><a href="shop.html">grid 4 column</a></li>
                                        <li><a href="shop-grid-box.html">grid box style</a></li>
                                        <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                        <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                        <li><a href="shop-list-box.html">list box style</a></li>
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-3.html"> tab style 3</a></li>
                                        <li><a href="product-details-4.html">sticky style</a></li>
                                        <li><a href="product-details-5.html">sticky style 2</a></li>
                                        <li><a href="product-details-6.html">gallery style</a></li>
                                        <li><a href="product-details-7.html">gallery style 2</a></li>
                                        <li><a href="product-details-8.html">fixed image style</a></li>
                                        <li><a href="product-details-9.html">fixed image style 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">BLOG</a>
                                    <ul>
                                        <li><a href="blog.html">blog 3 colunm</a></li>
                                        <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact  </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <div class="pl-200 pr-200 overflow clearfix">
        <div class="categori-menu-slider-wrapper clearfix">
            <div class="categories-menu">
                <div class="category-heading">
                    <h3> All Departments <i class="pe-7s-angle-down"></i></h3>
                </div>
                <div class="category-menu-list">
                    <ul>
                        <li>
                            <a href="#"><img alt="" src="ezone/img/icon-img/5.png">Computer & Laptops <i class="pe-7s-angle-right"></i></a>
                            <div class="category-menu-dropdown">
                                <div class="category-dropdown-style category-common4 mb-40">
                                    <h4 class="categories-subtitle"> Desktop</h4>
                                    <ul>
                                        <li><a href="#"> Mother Board</a></li>
                                        <li><a href="#"> Power Supply</a></li>
                                        <li><a href="#"> RAM</a></li>
                                        <li><a href="#"> Graphics Card</a></li>
                                        <li><a href="#"> Hard Disk Drive</a></li>
                                        <li><a href="#">Cooling Fan</a></li>
                                        <li><a href="#">HD Cable</a></li>
                                    </ul>
                                </div>
                                <div class="category-dropdown-style category-common4 mb-40">
                                    <h4 class="categories-subtitle"> Laptop</h4>
                                    <ul>
                                        <li><a href="#">HP</a></li>
                                        <li><a href="#">lenovo</a></li>
                                        <li><a href="#"> vivo</a></li>
                                        <li><a href="#">   Mack Book Air</a></li>
                                        <li><a href="#"> Mack Book Pro</a></li>
                                        <li><a href="#"> LG</a></li>
                                        <li><a href="#"> Others Brand</a></li>
                                    </ul>
                                </div>
                                <div class="category-dropdown-style category-common4 mb-40">
                                    <h4 class="categories-subtitle">Others</h4>
                                    <ul>
                                        <li><a href="#">Monitor</a></li>
                                        <li><a href="#">Mouse</a></li>
                                        <li><a href="#">Keybord</a></li>
                                        <li><a href="#">Speaker</a></li>
                                        <li><a href="#">Joy Stick</a></li>
                                        <li><a href="#">Wireless Speaker</a></li>
                                        <li><a href="#">Software</a></li>
                                    </ul>
                                </div>
                                <div class="category-dropdown-style category-common4 mb-40">
                                    <h4 class="categories-subtitle">Accessories</h4>
                                    <ul class="border-none">
                                        <li><a href="#">Monitor</a></li>
                                        <li><a href="#">Mouse</a></li>
                                        <li><a href="#">Keybord</a></li>
                                        <li><a href="#">Speaker</a></li>
                                        <li><a href="#">Joy Stick</a></li>
                                        <li><a href="#">Wireless Speaker</a></li>
                                        <li><a href="#">Software</a></li>
                                    </ul>
                                </div>
                                <div class="mega-banner-img">
                                    <a href="single-product.html">
                                        <img src="{{ asset('ezone/img/banner/1.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="ezone/img/icon-img/6.png">Phone & Tablets <i class="pe-7s-angle-right"></i></a>
                            <div class="category-menu-dropdown">
                                <div class="category-dropdown-style category-common4">
                                    <h4 class="categories-subtitle"> Desktop</h4>
                                    <ul>
                                        <li><a href="#"> Mother Board</a></li>
                                        <li><a href="#"> Power Supply</a></li>
                                        <li><a href="#"> RAM</a></li>
                                        <li><a href="#"> Graphics Card</a></li>
                                        <li><a href="#"> Hard Disk Drive</a></li>
                                        <li><a href="#">Cooling Fan</a></li>
                                        <li><a href="#">HD Cable</a></li>
                                    </ul>
                                </div>
                                <div class="category-dropdown-style category-common4">
                                    <h4 class="categories-subtitle"> Laptop</h4>
                                    <ul>
                                        <li><a href="#">HP</a></li>
                                        <li><a href="#">lenovo</a></li>
                                        <li><a href="#"> vivo</a></li>
                                        <li><a href="#">   Mack Book Air</a></li>
                                        <li><a href="#"> Mack Book Pro</a></li>
                                        <li><a href="#"> LG</a></li>
                                        <li><a href="#"> Others Brand</a></li>
                                    </ul>
                                </div>
                                <div class="category-dropdown-style category-common4">
                                    <h4 class="categories-subtitle">Others</h4>
                                    <ul>
                                        <li><a href="#">Monitor</a></li>
                                        <li><a href="#">Mouse</a></li>
                                        <li><a href="#">Keybord</a></li>
                                        <li><a href="#">Speaker</a></li>
                                        <li><a href="#">Joy Stick</a></li>
                                        <li><a href="#">Wireless Speaker</a></li>
                                        <li><a href="#">Software</a></li>
                                    </ul>
                                </div>
                                <div class="category-dropdown-style category-common4">
                                    <h4 class="categories-subtitle">Accessories</h4>
                                    <ul class="border-none">
                                        <li><a href="#">Monitor</a></li>
                                        <li><a href="#">Mouse</a></li>
                                        <li><a href="#">Keybord</a></li>
                                        <li><a href="#">Speaker</a></li>
                                        <li><a href="#">Joy Stick</a></li>
                                        <li><a href="#">Wireless Speaker</a></li>
                                        <li><a href="#">Software</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="ezone/img/icon-img/7.png"> Camera & Photos<i class="pe-7s-angle-right"></i></a>
                            <div class="category-menu-dropdown">
                                <div class="category-dropdown-style category-common3">
                                    <h4 class="categories-subtitle"> Desktop</h4>
                                    <ul>
                                        <li><a href="#"> Mother Board</a></li>
                                        <li><a href="#"> Power Supply</a></li>
                                        <li><a href="#"> RAM</a></li>
                                        <li><a href="#"> Graphics Card</a></li>
                                        <li><a href="#"> Hard Disk Drive</a></li>
                                        <li><a href="#">Cooling Fan</a></li>
                                        <li><a href="#">HD Cable</a></li>
                                    </ul>
                                </div>
                                <div class="category-dropdown-style category-common3">
                                    <h4 class="categories-subtitle"> Laptop</h4>
                                    <ul>
                                        <li><a href="#">HP</a></li>
                                        <li><a href="#">lenovo</a></li>
                                        <li><a href="#"> vivo</a></li>
                                        <li><a href="#">   Mack Book Air</a></li>
                                        <li><a href="#"> Mack Book Pro</a></li>
                                        <li><a href="#"> LG</a></li>
                                        <li><a href="#"> Others Brand</a></li>
                                    </ul>
                                </div>
                                <div class="category-dropdown-style category-common3">
                                    <h4 class="categories-subtitle">Others</h4>
                                    <ul class="border-none">
                                        <li><a href="#">Monitor</a></li>
                                        <li><a href="#">Mouse</a></li>
                                        <li><a href="#">Keybord</a></li>
                                        <li><a href="#">Speaker</a></li>
                                        <li><a href="#">Joy Stick</a></li>
                                        <li><a href="#">Wireless Speaker</a></li>
                                        <li><a href="#">Software</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="ezone/img/icon-img/8.png">TV & Audio </a>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="ezone/img/icon-img/9.png"> Game & Play Station</a>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="ezone/img/icon-img/10.png"> Car Electronics </a>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="ezone/img/icon-img/11.png"> Accessories </a>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="ezone/img/icon-img/12.png"> Gadgets</a>
                        </li>
                        <li>
                            <a href="#"><img alt="" src="ezone/img/icon-img/13.png">Others Equipment</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu-slider-wrapper">
                <div class="menu-style-3 menu-hover text-center">
                    <nav>
                        <ul>
                            <li><a href="index.html">home <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                                <ul class="single-dropdown">
                                    <li><a href="index.html">Fashion</a></li>
                                    <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                    <li><a href="index-fruits.html">fruits</a></li>
                                    <li><a href="index-book.html">book</a></li>
                                    <li><a href="index-electronics.html">electronics</a></li>
                                    <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                    <li><a href="index-food.html">food & drink</a></li>
                                    <li><a href="index-furniture.html">furniture</a></li>
                                    <li><a href="index-handicraft.html">handicraft</a></li>
                                    <li><a target="_blank" href="index-smart-watch.html">smart watch</a></li>
                                    <li><a href="index-sports.html">sports</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages </a>
                                <ul class="single-dropdown">
                                    <li><a href="about-us.html">about us</a></li>
                                    <li><a href="menu-list.html">menu list</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="cart.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">shop <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                                <div class="category-menu-dropdown shop-menu">
                                    <div class="category-dropdown-style category-common2 mb-30">
                                        <h4 class="categories-subtitle"> shop layout</h4>
                                        <ul>
                                            <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                            <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                            <li><a href="shop.html">grid 4 column</a></li>
                                            <li><a href="shop-grid-box.html">grid box style</a></li>
                                            <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                            <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                            <li><a href="shop-list-box.html">list box style</a></li>
                                            <li><a href="cart.html">shopping cart</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                    </div>
                                    <div class="category-dropdown-style category-common2 mb-30">
                                        <h4 class="categories-subtitle"> product details</h4>
                                        <ul>
                                            <li><a href="product-details.html">tab style 1</a></li>
                                            <li><a href="product-details-2.html">tab style 2</a></li>
                                            <li><a href="product-details-3.html"> tab style 3</a></li>
                                            <li><a href="product-details-4.html">sticky style</a></li>
                                            <li><a href="product-details-5.html">sticky style 2</a></li>
                                            <li><a href="product-details-6.html">gallery style</a></li>
                                            <li><a href="product-details-7.html">gallery style 2</a></li>
                                            <li><a href="product-details-8.html">fixed image style</a></li>
                                            <li><a href="product-details-9.html">fixed image style 2</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-banner-img">
                                        <a href="single-product.html">
                                            <img src="ezone/img/banner/1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="blog.html">blog <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                                <ul class="single-dropdown">
                                    <li><a href="blog.html">blog 3 colunm</a></li>
                                    <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                    <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div>








{{-- Banner Slider Area Start --}}
<div class="slider-area">
    <div class="slider-active owl-carousel">
@foreach ($banners as $banner)
        <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url({{ $banner->banner_img }})">
            <div class="slider-animation slider-content-style-3 fadeinup-animated">
                <h2 class="animated">{{ $banner->banner_header }}<br>{{ $banner->banner_header_2 }}</h2>
                <h4 class="animated">{{ $banner->banner_caption }} </h4>
                <a class="electro-slider-btn btn-hover" href="{{ $banner->banner_btn_link }}">{{ $banner->banner_btn_txt }}</a>
            </div>
        </div>
@endforeach
    </div>
</div>
{{-- Banner Slider Area End --}}




            </div>
        </div>
    </div>
    <div class="electronic-banner-area">
        <div class="custom-row-2">
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="ezone/img/banner/1.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position">
                        <h1>Live 4K! </h1>
                        <h2>up to 20% off</h2>
                        <h4>Amazon exclusives</h4>
                        <a href="product-details.html">Buy Now→</a>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="ezone/img/banner/1.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position2">
                        <h1>Xoxo ssl </h1>
                        <h2>up to 15% off</h2>
                        <h4>Amazon exclusives</h4>
                        <a href="product-details.html">Buy Now→</a>
                    </div>
                </div>
            </div>
            <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
                <div class="electronic-banner-wrapper">
                    <img src="ezone/img/banner/1.jpg" alt="">
                    <div class="electro-banner-style electro-banner-position3">
                        <h1>BY Laptop</h1>
                        <h2>Super Discount</h2>
                        <h4>Amazon exclusives</h4>
                        <a href="product-details.html">Buy Now→</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
        <div class="container-fluid">
            <div class="section-title-4 text-center mb-40">
                <h2>Top Products</h2>
            </div>
            <div class="top-product-style">
                <div class="product-tab-list3 text-center mb-80 nav product-menu-mrg" role="tablist">
                    <a class="active" href="#electro1" data-toggle="tab" role="tab">
                        <h4>Fiction </h4>
                    </a>
                    <a href="#electro2" data-toggle="tab" role="tab">
                        <h4>Satire </h4>
                    </a>
                    <a href="#electro3" data-toggle="tab" role="tab">
                        <h4>Anthologies</h4>
                    </a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active show fade" id="electro1" role="tabpanel">
                        <div class="custom-row-2">
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/1.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">First Air Headphone Black</a></h4>
                                        <span>Headphone</span>
                                        <h5>$133.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/2.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Full Bast Doule Speaker</a></h4>
                                        <span>Headphone</span>
                                        <h5>$110.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/3.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Xo GoPro Hero</a></h4>
                                        <span>Headphone</span>
                                        <h5>$133.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/4.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Twin Wash Dual</a></h4>
                                        <span>Headphone</span>
                                        <h5>$120.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/5.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Play Station Suporting</a></h4>
                                        <span>Headphone</span>
                                        <h5>$180.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/6.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Cannon D300R</a></h4>
                                        <span>Headphone</span>
                                        <h5>$170.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/7.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Wifi Printer For Office</a></h4>
                                        <span>Headphone</span>
                                        <h5>$150.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/8.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Featured Tab Windows</a></h4>
                                        <span>Headphone</span>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="electro2" role="tabpanel">
                        <div class="custom-row-2">
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/8.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">First Air Headphone Black</a></h4>
                                        <span>Headphone</span>
                                        <h5>$133.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/7.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Full Bast Doule Speaker</a></h4>
                                        <span>Headphone</span>
                                        <h5>$110.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/6.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Xo GoPro Hero</a></h4>
                                        <span>Headphone</span>
                                        <h5>$133.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/5.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Twin Wash Dual</a></h4>
                                        <span>Headphone</span>
                                        <h5>$120.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/4.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Play Station Suporting</a></h4>
                                        <span>Headphone</span>
                                        <h5>$180.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/3.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Cannon D300R</a></h4>
                                        <span>Headphone</span>
                                        <h5>$170.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/2.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Wifi Printer For Office</a></h4>
                                        <span>Headphone</span>
                                        <h5>$150.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/1.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Featured Tab Windows</a></h4>
                                        <span>Headphone</span>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="electro3" role="tabpanel">
                        <div class="custom-row-2">
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/4.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">First Air Headphone Black</a></h4>
                                        <span>Headphone</span>
                                        <h5>$133.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/3.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Full Bast Doule Speaker</a></h4>
                                        <span>Headphone</span>
                                        <h5>$110.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/2.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Xo GoPro Hero</a></h4>
                                        <span>Headphone</span>
                                        <h5>$133.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/1.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Twin Wash Dual</a></h4>
                                        <span>Headphone</span>
                                        <h5>$120.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/8.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Play Station Suporting</a></h4>
                                        <span>Headphone</span>
                                        <h5>$180.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/7.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Cannon D300R</a></h4>
                                        <span>Headphone</span>
                                        <h5>$170.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/6.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Wifi Printer For Office</a></h4>
                                        <span>Headphone</span>
                                        <h5>$150.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="ezone/img/product/electro/5.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Featured Tab Windows</a></h4>
                                        <span>Headphone</span>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-area wrapper-padding pt-30 pb-95">
        <div class="container-fluid">
            <div class="electro-fexible-banner bg-img" style="background-image: url(ezone/img/banner/1.jpg)">
                <div class="fexible-content">
                    <h3>Play with flexible</h3>
                    <p>Multicontrol Smooth Controller, Black Color All Buttons
                        <br>are somooth, Super Shine.</p>
                    <a class="btn-hover flexible-btn" href="product-details.html">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="best-selling-area pb-95">
        <div class="section-title-4 text-center mb-60">
            <h2>Best Selling</h2>
        </div>
        <div class="best-selling-product">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="best-selling-left">
                        <div class="product-wrapper">
                            <div class="product-img-4">
                                <a href="#"><img src="ezone/img/product/electro/9.jpg" alt=""></a>
                                <div class="product-action-right">
                                    <a class="animate-top" title="Add To Cart" href="#">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-5 text-center">
                                <div class="product-rating-4">
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star yellow"></i>
                                    <i class="icofont icofont-star yellow"></i>
                                </div>
                                <h4><a href="product-details.html">desktop C27F551</a></h4>
                                <span>Headphone</span>
                                <h5>$133.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="best-selling-right">
                        <div class="custom-container">
                            <div class="coustom-row-3">
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="ezone/img/product/electro/10.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                            </div>
                                            <h4><a href="product-details.html">Play Station</a></h4>
                                            <h5>$145.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="ezone/img/product/electro/11.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                            </div>
                                            <h4><a href="product-details.html">Joy Stick</a></h4>
                                            <h5>$145.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="ezone/img/product/electro/12.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                            </div>
                                            <h4><a href="product-details.html">Awesome Tab</a></h4>
                                            <h5>$145.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="ezone/img/product/electro/13.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star"></i>
                                            </div>
                                            <h4><a href="product-details.html">Trimmer C27F401</a></h4>
                                            <h5>$145.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="ezone/img/product/electro/14.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                            </div>
                                            <h4><a href="product-details.html">Timer C27F500</a></h4>
                                            <h5>$145.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-style-3 custom-col-3">
                                    <div class="product-wrapper mb-6">
                                        <div class="product-img-4">
                                            <a href="#">
                                                <img src="ezone/img/product/electro/15.jpg" alt="">
                                            </a>
                                            <div class="product-action-right">
                                                <a class="animate-top" title="Add To Cart" href="#">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                                <a class="animate-left" title="Wishlist" href="#">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-6">
                                            <div class="product-rating-4">
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star yellow"></i>
                                                <i class="icofont icofont-star"></i>
                                            </div>
                                            <h4><a href="product-details.html">Joy Stick</a></h4>
                                            <h5>$145.00</h5>
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
    <div class="androit-banner-wrapper wrapper-padding pb-175">
        <div class="container-fluid">
            <div class="androit-banner-img bg-img" style="background-image: url(ezone/img/banner/36.jpg)">
                <div class="androit-banner-content">
                    <h3>Xolo Fast T2 Smartphone, Android <br>7.0 Unlocked.</h3>
                    <a href="product-details.html">Buy Now →</a>
                </div>
                <div class="banner-price text-center">
                    <div class="banner-price-position">
                        <span class="banner-price-new">$125.00</span>
                        <span class="banner-price-old">$199.00</span>
                    </div>
                </div>
                <div class="phn-img">
                    <img src="ezone/img/banner/10.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="product-area-2 wrapper-padding pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="ezone/img/product/electro/16.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="ezone/img/product/electro/17.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="ezone/img/product/electro/18.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="ezone/img/product/electro/19.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="ezone/img/product/electro/20.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="product-wrapper product-wrapper-border mb-30">
                        <div class="product-img-5">
                            <a href="#">
                                <img src="ezone/img/product/electro/21.jpg" alt="">
                            </a>
                        </div>
                        <div class="product-content-7">
                            <h4><a href="#">Autel Robotics - X-Star Premium Quadcopter</a></h4>
                            <div class="product-rating-4">
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star yellow"></i>
                                <i class="icofont icofont-star"></i>
                            </div>
                            <h5>$499.00</h5>
                            <div class="product-action-electro">
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-right" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                                    <i class="pe-7s-repeat"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area-2 wrapper-padding ptb-80">
        <div class="container-fluid">
            <div class="brand-logo-active2 owl-carousel">
                <div class="single-brand">
                    <img src="ezone/img/brand-logo/7.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="ezone/img/brand-logo/8.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="ezone/img/brand-logo/9.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="ezone/img/brand-logo/10.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="ezone/img/brand-logo/11.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="ezone/img/brand-logo/12.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="ezone/img/brand-logo/13.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="ezone/img/brand-logo/7.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="ezone/img/brand-logo/8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="section-title-5">
                        <h2>Newsletter</h2>
                        <p>Sign Up for get all update news & Get <span>15% off</span></p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="newsletter-style-3">
                        <div id="mc_embed_signup" class="subscribe-form-3 pr-50">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                    </div>
                                    <div class="clear">
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-area">
        <div class="footer-top-3 black-bg pt-75 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xl-4">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">Contact Us</h3>
                            <div class="footer-info-wrapper-2">
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Address:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p>77 Seventh Streeth Banasree
                                            <br>Road Rampura -2100 Dhaka</p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Phone:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p>+11 (019) 2518 4203
                                            <br>+11 (251) 2223 3353</p>
                                    </div>
                                </div>
                                <div class="footer-address-electro">
                                    <div class="footer-info-icon2">
                                        <span>Email:</span>
                                    </div>
                                    <div class="footer-info-content2">
                                        <p><a href="#">domain@mail.com</a>
                                            <br><a href="#">company@domain.info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">My Account</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="login.html">Login Hare</a></li>
                                    <li><a href="cart.html">Cart History</a></li>
                                    <li><a href="checkout.html"> Payment History</a></li>
                                    <li><a href="shop.html">Product Tracking</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-xl-2">
                        <div class="footer-widget mb-40">
                            <h3 class="footer-widget-title-3">Information</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Our Service</a></li>
                                    <li><a href="#">Pricing Plan</a></li>
                                    <li><a href="#"> Vendor Detail</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xl-3">
                        <div class="footer-widget widget-right mb-40">
                            <h3 class="footer-widget-title-3">Service</h3>
                            <div class="footer-widget-content-3">
                                <ul>
                                    <li><a href="#">Product Service</a></li>
                                    <li><a href="#">Payment Service</a></li>
                                    <li><a href="#"> Discount Service</a></li>
                                    <li><a href="#">Shopping Service</a></li>
                                    <li><a href="#">Promotional Add</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle black-bg-2 pt-35 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-car"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Free Shipping</h3>
                                <p>Free Shipping on Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-shield"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Money Guarentee</h3>
                                <p>Free Shipping on Bangladesh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-services-wrapper mb-30">
                            <div class="footer-services-icon">
                                <i class="pe-7s-headphones"></i>
                            </div>
                            <div class="footer-services-content">
                                <h3>Online Support</h3>
                                <p>Free Shipping on Bangladesh</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom  black-bg pt-25 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="footer-menu">
                            <nav>
                                <ul>
                                    <li><a href="#">Privacy Policy </a></li>
                                    <li><a href="blog.html"> Blog</a></li>
                                    <li><a href="#">Help Center</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright f-right mrg-5">
                            <p>
                                Copyright ©
                                <a href="https://hastech.company/">HasTech</a> 2018 . All Right Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- modal -->
    <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-compare-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="table-content compare-style table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <a href="#">Remove <span>x</span></a>
                                            <img src="ezone/img/cart/4.jpg" alt="">
                                            <p>Blush Sequin Top </p>
                                            <span>$75.99</span>
                                            <a class="compare-btn" href="#">Add to cart</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Description </h4></td>
                                        <td class="compare-dec compare-common">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Sku </h4></td>
                                        <td class="product-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Availability  </h4></td>
                                        <td class="compare-stock compare-common">
                                            <p>In stock</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Weight   </h4></td>
                                        <td class="compare-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Dimensions   </h4></td>
                                        <td class="compare-stock compare-common">
                                            <p>N/A</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>brand   </h4></td>
                                        <td class="compare-brand compare-common">
                                            <p>HasTech</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>color   </h4></td>
                                        <td class="compare-color compare-common">
                                            <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>size    </h4></td>
                                        <td class="compare-size compare-common">
                                            <p>XS, S, M, L, XL, XXL </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title"></td>
                                        <td class="compare-price compare-common">
                                            <p>$75.99 </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="ezone/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="ezone/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="ezone/img/quick-view/l3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                <img src="ezone/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab">
                                <img src="ezone/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab">
                                <img src="ezone/img/quick-view/s3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>Handcrafted Supper Mug</h3>
                            <div class="price">
                                <span class="new">$90.00</span>
                                <span class="old">$120.00  </span>
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">900</option>
                                        <option value="">700</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="#">add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- all js here -->
    <script src="{{ asset('ezone/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{ asset('ezone/js/popper.js')}}"></script>
    <script src="{{ asset('ezone/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('ezone/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('ezone/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('ezone/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('ezone/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('ezone/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('ezone/js/ajax-mail.js')}}"></script>
    <script src="{{ asset('ezone/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('ezone/js/plugins.js')}}"></script>
    <script src="{{ asset('ezone/js/main.js')}}"></script>


</body>

</html>