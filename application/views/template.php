<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="description" content="Miminium Admin Template v.1">
    <meta name="author" content="Putri Endah Cahyani">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Diagnosa Kucing</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/plugins/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/plugins/simple-line-icons.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/plugins/fullcalendar.min.css" />
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- end: Css -->
    <!-- <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logomi.png"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>files/assets/images/favicon.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body id="mimin" class="dashboard">
    <!-- start: Header -->
    <nav class="navbar navbar-default header navbar-fixed-top">
        <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
                <div class="opener-left-menu is-open">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </div>
                <a href="<?= base_url('konsultasi') ?>" aria-expanded="false" target="_blank " class="navbar-brand">
                    <b>Diagnosa Kucing</b>
                </a>

                <ul class="nav navbar-nav search-nav">
                    <li>
                        <div class="search">
                            <?php echo anchor('Auth/logout', ' <span class="fa fa-sign-out icon-sign-out" style="font-size:23px;"></span>'); ?>
                            <div class="form-group form-animate-text">
                                <span class="bar"></span>
                                <label><b style="color:white;">Logout</b></label>
                            </div>
                        </div>
                    </li>


                    <li>
                        <div class="search">
                            <?php echo anchor('Tes', ' <span class="fa fa-stethoscope" style="font-size:23px;"></span>'); ?>
                            <div class="form-group form-animate-text">
                                <span class="bar"></span>
                                <label><b style="color:white;">Diagnosa Penyakit Kucing</b></label>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right user-nav">
                    <li class="user-name"><span><?php echo $this->session->userdata('username') ?></span></li>
                    <img src="<?php echo base_url() ?>assets/img/kucing.jpg" class="img-circle avatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" />
                </ul>
            </div>
        </div>
    </nav>
    <!-- end: Header -->

    <div class="container-fluid mimin-wrapper">

        <!-- start:Left Menu -->
        <div id="left-menu">
            <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li>
                        <div class="left-bg"></div>
                    </li>
                    <li class="time">
                        <h1 class="animated fadeInLeft"><?php echo date("H:i:s"); ?></h1>
                        <p class="animated fadeInRight">
                        <p><?php echo date("M") ?> &copy; <?php echo date("Y") ?></p>
                        </p>
                    </li>
                    <li class="ripple"><a href="<?php echo site_url('Admin') ?>"><span class="fa fa-home"></span>Dashboard</a></li>
                    <li class="ripple"><a href="<?php echo site_url('Gejala') ?>"><span class="fa fa-calendar-o"></span>Daftar Gejala</a></li>
                    <li class="ripple"><a href="<?php echo site_url('Kucing') ?>"><span class="fa fa-hospital-o"></span>Daftar Kucing</a></li>
                    <li class="ripple"><a href="<?php echo site_url('Rule') ?>"><span class="fa fa-pencil-square-o"></span>Aturan</a></li>
                </ul>
            </div>
        </div>
        <!-- end: Left Menu -->
    </div>

    <!-- start: content -->
    <div id="content">
        <?php echo $contents  ?>
    </div>
    <!-- end: content -->






    <!-- start: Mobile -->

    <!-- start: Javascript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.ui.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/plugins/jquery.datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/datatables.bootstrap.min.js"></script>

    <!-- plugins -->
    <script src="<?php echo base_url() ?>assets/js/plugins/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/jquery.vmap.sampledata.js"></script>


    <!-- custom -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <script type="text/javascript">
        (function(jQuery) {
            jQuery('.maps').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#fff',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#C8EEFF', '#006491'],
                normalizeFunction: 'polynomial'
            });

            // end: Maps==============

        })(jQuery);

        $(document).ready(function() {
            $('#datatables-example').DataTable();
        });
    </script>
    <script type="text/javascript">
    </script>
    <!-- end: Javascript -->
</body>

</html>