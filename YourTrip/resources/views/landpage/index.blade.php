<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="{{asset('image')}}/images/favicon.ico">
    <link rel="shortcut icon" href="{{asset('template')}}/images/favicon.ico" />
    <link rel="stylesheet" href="{{asset('template')}}/booking/css/booking.css">
    <link rel="stylesheet" href="{{asset('template')}}/css/camera.css">
    <link rel="stylesheet" href="{{asset('template')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('template')}}/css/style.css">
    <script src="{{asset('template')}}/js/jquery.js"></script>
    <script src="{{asset('template')}}/js/jquery-migrate-1.2.1.js"></script>
    <script src="{{asset('template')}}/js/script.js"></script>
    <script src="{{asset('template')}}/js/superfish.js"></script>
    <script src="{{asset('template')}}/js/jquery.ui.totop.js"></script>
    <script src="{{asset('template')}}/js/jquery.equalheights.js"></script>
    <script src="{{asset('template')}}/js/jquery.mobilemenu.js"></script>
    <script src="{{asset('template')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{asset('template')}}/js/owl.carousel.js"></script>
    <script src="{{asset('template')}}/js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="{{asset('template')}}/js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="{{asset('template')}}/booking/js/booking.js"></script>
    <script>
        $(document).ready(function() {
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: false,
                minHeight: '444',
                thumbnails: false,
                height: '48.375%',
                caption: true,
                navigation: true,
                fx: 'mosaic'
            });
            /*carousel*/
            var owl = $("#owl");
            owl.owlCarousel({
                items: 2, //10 items above 1000px browser width
                itemsDesktop: [995, 2], //5 items between 1000px and 901px
                itemsDesktopSmall: [767, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation: true,
                pagination: false
            });
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
</head>

<body class="page1" id="top">
    <!--==============================header=================================-->
    <header>
        <div class="container_12">
            <div class="grid_12">
                <div class="menu_block">
                    <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                        <ul class="sf-menu">
                            <li class="current"><a href="/index">HOME</a></li>
                            <li><a href="/wisata">WISATA</a></li>
                            <li><a href="/akomodasi">AKOMODASI</a></li>
                            <li><a href="/gallery">GALLERY</a></li>
                            <li><a href="/contacts">CONTACTS</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="grid_12">
                <h1>
                    <a href="index.html">
                        <img src="{{asset('template')}}/images/logo.png" alt="Your Happy Family">
                    </a>
                </h1>
            </div>
        </div>
    </header>
    <div class="slider_wrapper">
        <div id="camera_wrap" class="">
            <div data-src="{{asset('template')}}/images/gam/gam1.jpg">
                <div class="caption fadeIn">
                    <h2>PARAPAT</h2>
                    <div class="price">
                        MULAI
                        <span>Rp 100.000</span>
                    </div>
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}">Explore Destinations</a>
                </div>
            </div>
            <div data-src="{{asset('template')}}/images/gam/gam2.jpg">
                <div class="caption fadeIn">
                    <h2>PARAPAT</h2>
                    <div class="price" style=" text-shadow: 0 0 4px #001eaa">
                        MULAI
                        <span style=" text-shadow: 0 0 4px #001eaa">Rp 100.000</span>
                    </div>
                    <a href="{{ route('login') }}">Explore Destinations</a>
                </div>
            </div>
            <div data-src="{{asset('template')}}/images/gam/gam3.jpg">
                <div class="caption fadeIn">
                    <h2>PARAPAT</h2>
                    <div class="price">
                        MULAI
                        <span>Rp 100.000</span>
                    </div>
                    <a href="{{ route('login') }}">Explore Destinations</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--==============================Content=================================-->
    <div class="content">
        <div class="ic"></div>
        <div class="container_12">
            <div class="grid_4">
                <div class="banner">
                    <img src="{{asset('template')}}/images/gam/gam6.jpg" alt="">
                    <div class="label">
                        <div class="title" style=" text-shadow: 0 0 4px #001eaa">Niagara Hotel</div>
                        <div class="price" style=" text-shadow: 0 0 4px #001eaa">MULAI<span>Rp 599.000</span></div>

                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner">
                    <img src="{{asset('template')}}/images/gam/gam7.jpg" alt="">
                    <div class="label">
                        <div class="title" style=" text-shadow: 0 0 3px #CBAE23">View Hotel</div>
                        <div class="price">MULAI<span>Rp 643.000</span></div>

                    </div>
                </div>
            </div>
            <div class="grid_4">
                <div class="banner">
                    <img src="{{asset('template')}}/images/gam/gam4.jpg" alt="">
                    <div class="label">
                        <div class="title" style=" text-shadow: 0 0 3px #FF0000">Inna Hotel</div>
                        <div class="price">MULAI<span>Rp 1.334.475</span></div>

                    </div>
                </div>
            </div>

            <div class="clear"></div>
            <div class="grid_6">
                <p></p>
                <p></p>

                <h3>
                    <p>Ready for Travel</p>
                </h3>
                <form id="bookingForm">
                    <img src="{{asset('template')}}/images/gam/art.jpg" alt="">
                </form>
            </div>
            <div class="grid_5 prefix_1">
                <p></p>
                <p></p>
                <h3>Selamat Datang</h3>
                <img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper">
                    <p>Parapat merupakan tempat wisata yang sangat</p>
                    cocok untuk menikmati pesona Danau Toba.
                </div>
                <div class="clear cl1"></div>
                <p>Dilengkapi dengan banyak penginapan yang comfortable. </p>
                <h4>Quotes Pengunjung</h4>
                <blockquote class="bq1">
                    <img src="{{asset('template')}}/images/gam/icon.png" alt="" class="img_inner noresize fleft" size="">
                    <div class="extra_wrapper">
                        <p>Tempat wisata di Parapat sangat asri, dan sejuk. Nuansa alami sangat melekat di sini. Selain itu, juga terdapat banyak fasilitas dan penginapan yang sangat bagus.</p>
                        <div class="alright">
                            <div class="col1">Aji</div>
                        </div>
                    </div>
                </blockquote>
            </div>
            <div class="grid_12">
                <h3 class="head1"> </h3>
            </div>
            <div class="grid_4">

            </div>
            <div class="grid_4">

            </div>
            <div class="grid_4">

            </div>
        </div>
    </div>
    <!--==============================footer=================================-->
    <footer>
        <div class="container_12">
            <div class="grid_12">
                <div class="socials">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                </div>
                <div class="copy">
                    Your Trip (c) 2021 | <a href="#">Privacy Policy</a> | Let’s start your journey with us, your dream will come true.
                </div>
            </div>
        </div>
    </footer>
    <script>
        $(function() {
            $('#bookingForm').bookingForm({
                ownerEmail: '#'
            });
        })
        $(function() {
            $('#bookingForm input, #bookingForm textarea').placeholder();
        });
    </script>
</body>

</html>