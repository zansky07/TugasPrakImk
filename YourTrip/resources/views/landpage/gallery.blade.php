<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="{{asset('template')}}/images/favicon.ico">
    <link rel="shortcut icon" href="{{asset('template')}}/images/favicon.ico" />
    <link rel="stylesheet" href="{{asset('template')}}/css/style.css">
    <script src="{{asset('template')}}/js/jquery.js"></script>
    <script src="{{asset('template')}}/js/jquery-migrate-1.2.1.js"></script>
    <script src="{{asset('template')}}/js/script.js"></script>
    <script src="{{asset('template')}}/js/superfish.js"></script>
    <script src="{{asset('template')}}/js/jquery.ui.totop.js"></script>
    <script src="{{asset('template')}}/js/jquery.equalheights.js"></script>
    <script src="{{asset('template')}}/js/jquery.mobilemenu.js"></script>
    <script src="{{asset('template')}}/js/jquery.easing.1.3.js"></script>
    <script>
        $(document).ready(function() {
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
                            <li><a href="/wisata">WISATA</a></li>
                            <li><a href="/akomodasi">AKOMODASI</a></li>
                            <li class="current"><a href="/gallery">GALLERY</a></li>
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
    <div class="content">
        <div class="ic"></div>
        <div class="container_12">
            <div class="banners">
                <div class="grid_4">
                    <div class="banner">
                        <img src="{{asset('template')}}/images/gal/001.jpg" alt="">
                        <div class="label">
                            <div class="title"></div>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="{{asset('template')}}/images/gal/002.jpg" alt="">
                        <div class="label">
                            <div class="title"></div>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="{{asset('template')}}/images/gal/003.jpg" alt="">
                        <div class="label">
                            <div class="title"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="{{asset('template')}}/images/gal/004.jpg" alt="">
                        <div class="label">
                            <div class="title"></div>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="{{asset('template')}}/images/gal/005.jpg" alt="">
                        <div class="label">
                            <div class="title"></div>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="{{asset('template')}}/images/gal/006.jpg" alt="">
                        <div class="label">
                            <div class="title"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="{{asset('template')}}/images/gal/007.jpg" alt="">
                        <div class="label">
                            <div class="title"></div>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="{{asset('template')}}/images/gal/008.jpg" alt="">
                        <div class="label">
                            <div class="title"></div>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <div class="banner">
                        <img src="{{asset('template')}}/images/gal/009.jpg" alt="">
                        <div class="label">
                            <div class="title"></div>
                        </div>
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
                    Your Trip (c) 2014 | <a href="#">Privacy Policy</a> | Let’s start your journey with us, your dream will come true.
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