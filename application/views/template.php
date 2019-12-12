<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ap.ress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="<?php echo base_url(); ?>assets/images/icon/logogg.png">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/images/icon/ap.ress.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <?php
                                if($this->session->userdata('level') == 'Admin'){
                                    ?>
                                        <li>
                                            <a href="<?php echo base_url('index.php/dashboard'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('index.php/galeri'); ?>"><i class="fa fa-image"></i> <span>Galeri</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('index.php/kategori'); ?>"><i class="fa fa-th-list"></i> <span>Data Kategori</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('index.php/barang'); ?>"><i class="fa fa-shopping-bag"></i> <span>Voucher</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('index.php/pengguna'); ?>"><i class="fa fa-users"></i> <span>Data Pengguna</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('index.php/transaksi'); ?>"><i class="fa fa-shopping-cart"></i> <span>Transaksi</span></a>
                                        </li>

                                        <li>
                                            <a href="<?php echo base_url('index.php/transaksi/riwayat'); ?>"><i class="ti-receipt"></i> <span>Riwayat Transaksi</span></a>
                                        </li>
                                    <?php
                                } else {
                                    ?>
                                        <li>
                                          <a href="#"> My Point :  <span id="point">6700</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('index.php/galeri'); ?>"><i class="fa fa-image"></i> <span>Galeri</span></a>
                                        </li>
                                        <li>
                                          <a href="<?php echo base_url('index.php/barang1'); ?>"><i class="fa fa-shopping-bag"></i> <span>Voucher</span></a>
                                        </li>
                                        <li>
                                          <a href="<?php echo base_url('index.php/transaksi'); ?>"><i class="fa fa-shopping-cart"></i> <span>Transaksi</span></a>
                                        </li>
                                        <li>
                                          <a href="<?php echo base_url('index.php/transaksi/riwayat'); ?>"><i class="ti-receipt"></i> <span>Riwayat Transaksi</span></a>
                                        </li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Selamat Datang, <?php echo $this->session->userdata('nama'); ?></h4>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?php echo base_url(); ?>assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('username'); ?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('index.php/login/logout'); ?>">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
				$this->load->view($main_view);
			?>
            <!-- page title area end -->


        <!-- main content area end -->
        <!-- footer area start-->

        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- jquery latest version -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="<?php echo base_url(); ?>assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="<?php echo base_url(); ?>assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="<?php echo base_url(); ?>assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="<?php echo base_url(); ?>assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <script type="text/javascript">
      $.ajax({
        url: "<?= base_url('') ?>index.php/transaksi/getpoin",
        method: "POST",
        data: {
          'id': "<?= $_SESSION['id'] ?>"
        },
        success: function (res) {
            console.log(JSON.stringify(res));
        //   console.log(json_decode(res));
        // console.log('faisal');
          
          $("#points").html("point: " + str  );
        }
      })
    </script>
    <script type="text/javascript">
     var str = $("#stok").text();
    </script>
</body>

</html>
