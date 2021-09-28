<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wisata</title>
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

<body>
    <!--==============================header=================================-->
    <header>
        <div class="container_12">
            <div class="grid_12">
                <div class="menu_block">
                    <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                        <ul class="sf-menu">
                            <li><a href="/">HOME</a></li>
                            <li class="current"><a href="/wisata">WISATA</a></li>
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
    <!--==============================Content=================================-->
    <!--==============================Content=================================-->
    <div class="content">
        <div class="ic"></div>
        <div class="container_12">
            <div class="grid_8">
                <h3>Wisata</h3>
                <div class="block2">
                    <img src="{{asset('template')}}/images/page3_img2.jpg" alt="" class="img_inner fleft">
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="">Puncak Parapat</a></div>
                        <p>Kawasan ini merupakan titik keberangkatan untuk berkunjung ke Danau Toba. Di sini pengunjung dapat menikmati pemandangan Danau Toba dan Pulau Samosir dari ketinggian, dikelilingi oleh pohon yang rindang dan asri. </p>Setelah menikmati pemandangan pengunjung juga dapat menyebrang ke Pulau Samosir dan mengunjungi beberapa tempat wisata menarik, seperti air terjun di Simanindo serta pemandian air panas di Kota Pangururan.
                        <br>
                    </div>
                </div>
                <div class="block2">
                    <img src="{{asset('template')}}/images/page3_img1.jpg" alt="" class="img_inner fleft">
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="">Batu Gantung</a></div>
                        <p>Batu Gantung ini merupakan asal mula nama Kota Parapat diambil. Dahulu kala ada cerita atau mitos yang berkembang, yakni Parapat diambil dari kata merapatlah.
                            Tempat ini juga cukup populer di kalangan wisatawan. Lokasinya yang berada di tebing dan masih berada di kawasan Danau Toba membuat wisatawan harus menggunakan kapal untuk mengunjunginya.</p>
                        <br>
                    </div>
                </div>
                <div class="block2">
                    <img src="{{asset('template')}}/images/page3_img3.jpg" alt="" class="img_inner fleft">
                    <div class="extra_wrapper">
                        <div class="text1 col1"><a href="">Pelabuhan Ajibata</a></div>
                        <p>Pelabuhan Ajibata (Danau Toba) terletak di Prapat, Sumatra Utara.
                            Pelabuhan ini mengantarkan penumpang dengan Kapal Ferry dan Kapal Wisata untuk menuju ke Pelabuhan Tomok, Samosir.
                            Sepanjang perjalanan akan di kelilingi di danau toba yang begitu luas dengan pemandangan bukit barisan yang begitu indah.</p>
                        <br>
                    </div>
                </div>
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
    </script>
</body>

</html>