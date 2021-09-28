<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akomodasi</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/t_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/t_admin/dist/css/adminlte.min.css">

    <link rel="icon" href="http://127.0.0.1:8000/image/images/favicon.ico">
    <link rel="shortcut icon" href="http://127.0.0.1:8000/template/images/favicon.ico" />
    <link rel="stylesheet" href="http://127.0.0.1:8000/template/booking/css/booking.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/template/css/camera.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/template/css/owl.carousel.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/template/css/style.css">
    <script src="http://127.0.0.1:8000/template/js/jquery.js"></script>
    <script src="http://127.0.0.1:8000/template/js/jquery-migrate-1.2.1.js"></script>
    <script src="http://127.0.0.1:8000/template/js/script.js"></script>
    <script src="http://127.0.0.1:8000/template/js/superfish.js"></script>
    <script src="http://127.0.0.1:8000/template/js/jquery.ui.totop.js"></script>
    <script src="http://127.0.0.1:8000/template/js/jquery.equalheights.js"></script>
    <script src="http://127.0.0.1:8000/template/js/jquery.mobilemenu.js"></script>
    <script src="http://127.0.0.1:8000/template/js/jquery.easing.1.3.js"></script>
    <script src="http://127.0.0.1:8000/template/js/owl.carousel.js"></script>
    <script src="http://127.0.0.1:8000/template/js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="http://127.0.0.1:8000/template/js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="http://127.0.0.1:8000/template/booking/js/booking.js"></script>
    <script>


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

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->


        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="http://127.0.0.1:8000/template/images/fil.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">yourTRIP</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <!--user login------------------------------------------------------------------------------------------------------------------------------------------------->
                    <div class="image">
                        <img src="http://127.0.0.1:8000/t_admin/dist/img/im_icon.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{route('user.dashboard')}}" class="d-block">{{ Auth::user()->name}}</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="{{route('user.dashboard')}}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Home

                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{route('user.wisata')}}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Wisata
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{route('user.akomodasi')}}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Akomodasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{route('user.tiket')}}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Tiket
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">

                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!--==============================Content=================================-->
            <div class="content">
                <div class="ic"></div>
                <div class="container_12">
                    <div class="grid_7">
                        <h3>Hotel Dan Penginapan</h3>
                        <div class="blog">
                            @foreach($hotels as $ht)
                            <div class="extra_wrapper">

                                <div class="text1 col1"><a href="">{{ $ht->nama_hotel}}</a></div>
                                <div class="clear"></div>
                                <img src="http://127.0.0.1:8000/template/images/gam/{{ $ht->gambar}}.jpg" alt="" class="img_inner">
                                {{ $ht->deskripsi}} <br><br>
                                <hr>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!--==============================footer=================================-->
                <footer>
                    <div class="container_12">
                        <div class="grid_12">
                            <div class="socials">
                                <a href="https://www.youtube.com/channel/UCR0mh1wxedQHGmypZadifTQ" class="fa fa-youtube"></a>
                                <a href="https://instagram.com/yourtrip.parapat_?utm_medium=copy_link" class="fa fa-instagram"></a>
                            </div>
                            <div class="copy">
                                Your Trip (c) 2021 | <a href="#">Privacy Policy</a> | Let’s start your journey with us, your dream will come true.
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </div>
    </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b></b>
        </div>
        <strong> </strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="http://127.0.0.1:8000/t_admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="http://127.0.0.1:8000/t_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="http://127.0.0.1:8000/t_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://127.0.0.1:8000/t_admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="http://127.0.0.1:8000/t_admin/dist/js/demo.js"></script>
</body>

</html>