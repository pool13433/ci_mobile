<!DOCTYPE html>
<html>
    <head>
        <title>IPhone2016</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo site_url() ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo site_url() ?>css/font-awesome.min.css" rel="stylesheet"/>
        <!-- Ionicons -->
        <link href="<?php echo site_url() ?>css/ionicons.min.css" rel="stylesheet"/>
        <!-- Morris chart -->
        <link href="<?php echo site_url() ?>css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?php echo site_url() ?>css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="<?php echo site_url() ?>css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo site_url() ?>css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo site_url() ?>css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo site_url() ?>css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="<?php echo site_url() ?>css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            @font-face {
                font-family: 'FontAwesome';
                src: url('<?php echo site_url() ?>fonts/fontawesome-webfont.eot?v=4.0.3');
                src: url('<?php echo site_url() ?>fonts/fontawesome-webfont.eot?#iefix&v=4.0.3') format('embedded-opentype'), 
                    url('<?php echo site_url() ?>fonts/fontawesome-webfont.woff?v=4.0.3') format('woff'), 
                    url('<?php echo site_url() ?>fonts/fontawesome-webfont.ttf?v=4.0.3') format('truetype'),
                    url('<?php echo site_url() ?>fonts/fontawesome-webfont.svg?v=4.0.3#fontawesomeregular') format('svg');
                font-weight: normal;
                font-style: normal
            }
        </style>
        <!-- jQuery 2.0.2 -->
        <script src="<?php echo site_url() ?>js/jquery.min.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo site_url() ?>js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo site_url() ?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo site_url() ?>js/plugins/morris/morris.min.js" type="text/javascript"></script>-->
        <!-- Sparkline -->
        <script src="<?php echo site_url() ?>js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo site_url() ?>js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo site_url() ?>js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo site_url() ?>js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo site_url() ?>js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo site_url() ?>js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo site_url() ?>js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo site_url() ?>js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="<?php echo site_url() ?>js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo site_url() ?>js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo site_url() ?>js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- Custom Javascript-->
        <script src="<?php echo site_url() ?>js/datatable-custom.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!--<script src="<?php echo site_url() ?>js/AdminLTE/dashboard.js" type="text/javascript"></script>-->


    </head>
    <body class="skin-blue wysihtml5-supported  pace-done">        
        <?php include 'modal_filter_advanced.php'; ?>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('mobile/index') ?>">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    
<!--                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ตั้งค่าระบบ <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('brand/index') ?>">จัดการยี่ห้อ</a></li>
                                <li><a href="<?php echo site_url('series/index') ?>">จัดการรุ่น</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('product/index') ?>">มือถือ</a></li>
                    </ul>-->
                    
                    
                    <form class="navbar-form navbar-left" role="search" action="<?= site_url('mobile/search') ?>" method="get">
                        <div class="form-group">
                            <input type="text" name="param1" class="form-control" value="<?= $params['param1'] ?>" placeholder="Search">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="param2">
                                <option value="">--ยี่ห้อ ทั้งหมด--</option>
                                <?php foreach ($list_brand as $key => $brand) { ?>
                                    <?php if ($params['param2'] == $brand->brand_id) { ?>
                                        <option value="<?= $brand->brand_id ?>" selected><?= $brand->name_th ?></option>
                                    <?php } else { ?>
                                        <option value="<?= $brand->brand_id ?>"><?= $brand->name_th ?></option>
                                    <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <!--                        <button type="submit" class="btn btn-default">Submit</button>-->
                        <!-- Single button -->

                        <!-- Split button -->
                        <div aria-label="Default button group" role="group" class="btn-group"> 
                            <button class="btn btn-default" type="submit">ค้นหา</button> 
<!--                            <button class="btn btn-default" type="button" data-toggle="modal" data-target="#modalFilterAdvanced">ตัวกรองเพิ่มเติม</button> -->
                        </div>

                    </form>
                    
<!--                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>-->
                    
                    
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
