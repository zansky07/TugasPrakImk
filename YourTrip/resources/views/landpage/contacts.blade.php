<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="{{asset('template')}}/images/favicon.ico">
    <link rel="shortcut icon" href="{{asset('template')}}/images/favicon.ico" />
    <link rel="stylesheet" href="{{asset('template')}}/css/form.css">
    <link rel="stylesheet" href="{{asset('template')}}/css/style.css">
    <script src="{{asset('template')}}/js/jquery.js"></script>
    <script src="{{asset('template')}}/js/jquery-migrate-1.2.1.js"></script>
    <script src="{{asset('template')}}/js/script.js"></script>
    <script src="{{asset('template')}}/js/TMForm.js"></script>
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
                            <li><a href="/gallery">GALLERY</a></li>
                            <li class="current"><a href="/contacts">CONTACTS</a></li>
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
            <div class="grid_5">
                <h3>CONTACT INFO</h3>
                <div class="map">
                    <p><span class="blog">Your Trip is Parapat's leading technology company prociding access for users to discover and purchase a range of accomodation, lifestyle and financial service product. </span></p>
                    <div class="clear"></div>
                    <figure class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31884.162159005147!2d98.92794523574952!3d2.659719395593676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031eea4f04ecdf9%3A0xdcb418d291eb80ce!2sParapat%2C%20Girsang%20Sipangan%20Bolon%2C%20Kabupaten%20Simalungun%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1624324551859!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </figure>
                    <address>
                        <dl>
                            <dt>Your Trip Inc. <br>
                                Girsang Sipangan Bolon,<br>
                                Kabupaten Simalungun,<br>
                                Sumatera Utara.
                            </dt>
                            <dd><span>Freephone:</span> 0812 3456 7890</dd>
                            <dd><span>Telephone:</span> 0812 3456 7890</dd>
                            <dd><span>FAX:</span> 0812 3456 7890</dd>
                            <dd>E-mail: <a href="" class="col1">yourtrip@gmail.com</a></dd>
                        </dl>
                    </address>
                </div>
            </div>
            <div class="grid_6 prefix_1">
                <h3>ABOUT US</h3>
                <p><span class="blog">
                        <p>Your Trip's comprehensive product portofolio includes booking service such as tickets as well as access to largest
                            accomodation inventory in Parapat, including hotels, guest houses, homestay, resorts, and villas, making Your Trip as a booking platform with widest selections of accomodation and packages.</p>
                        <br>
                        <p>Your Trip is also a key player in the lifestyle segment offering reservation for a wide range of local attractions and activities as well as culinary directories.
                            Through its Financial Services products, Your Trip also offers financing, payment, and insurance solutions for the underbanked to help customers solve their various financial pain points in their Travel & Lifestyle journey.
                            Your Trip provides customer service that can be contacted 24/7 online or offline. </p>
                    </span></p>

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