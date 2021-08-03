<?php
/*
------------------------------------------------------------------------------------------------------------------------
DiPMIMS - Digital Pulz Medical Information Management System
Copyright (c) 2018 Sri Lanka Institute of Information Technology
<http: http://his.sliit.lk />
------------------------------------------------------------------------------------------------------------------------
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?php echo base_url()?>images/dp.png" type="image/png">
    <title>Digital Pulz - Base Template</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/Ionicons/css/ionicons.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css'); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css'); ?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/iCheck/all.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('plugins/selectizer/selectize.bootstrap3.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('plugins/datatable/jquery.dataTables.min.css.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('plugins/datatable/buttons.dataTables.min.css.css'); ?>">
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">-->
    <!--<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">-->
    <!-- Select2 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('plugins/dist/css/jquery-ui.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('bower_components/select2/dist/css/select2.min.css'); ?>">
    <!-- jQuery 3 -->
    <script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- Select2 -->
    <script src="<?= base_url('plugins/Bootstrap/js/jquery-ui.min.js'); ?>"></script>
    <script src="<?php echo base_url('bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>

    <script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>

    <script src="<?php echo base_url('plugins/datatable/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/datatable/dataTables.rowsGroup.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/datatable/jszip.min.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/datatable/buttons.print.min.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/datatable/pdfmake.min.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/datatable/vfs_fonts.js'); ?>"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>-->
    <script src="<?php echo base_url('plugins/datatable/buttons.html5.min.js'); ?>"></script>

    <!--<script type="text/javascript" src="<?php /*echo base_url('assets'); */ ?>/plugins/paginations/full_numbers_no_ellipses.js"></script>-->
    <!-- moment.js -->
    <script src="<?php echo base_url('plugins/moment/moment.js'); ?>"></script>

    <script src="<?php echo base_url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>

    <!-- InputMask -->
    <script src="<?php echo base_url('plugins/input-mask/jquery.inputmask.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url('bower_components/moment/min/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
    <!-- bootstrap datepicker -->
    <script src="<?php echo base_url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js'); ?>"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo base_url('plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo base_url('plugins/iCheck/icheck.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('bower_components/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('dist/js/adminlte.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('dist/js/demo.js'); ?>"></script>
    <!--selectizer for transaction type add-->
    <script src="<?php echo base_url('plugins/selectizer/selectize.min.js'); ?>"></script>
    <!--boobox for alerts-->
    <script src="<?php echo base_url('plugins/bootbox/bootbox.min.js'); ?>"></script>
    <!--pdf converter-->
    <script src="<?php echo base_url('plugins/html2canvas-master/html2canvas.js'); ?>"></script>
    <!--jquery redirect-->
    <script src="<?php echo base_url('plugins/jqueryRedirect/jquery.redirect.js'); ?>"></script>
    <!--zingchart for dashboard-->
    <script src="<?php echo base_url('plugins/zingChart/zingchart.min.js'); ?>"></script>
    <!--toggle radio button-->
    <script src="<?php echo base_url('plugins/bootstrap-toggle-master/js/bootstrap-toggle.min.js'); ?>"></script>
    <!--Age calculator-->
    <script src="<?php echo base_url('plugins/agecalculator/agecalculator.js'); ?>"></script>
    <!-- PDF Maker -->
    <script src="<?php echo base_url('plugins/pdf/pdfmake.min.js'); ?>"></script>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/Ionicons/css/ionicons.min.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet"
          href="<?php echo base_url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css'); ?>">
    <link href="<?php echo base_url('plugins/bootstrap-toggle-master/css/bootstrap-toggle.min.css'); ?>"
          rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/skins/_all-skins.min.css'); ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('plugins/media//html5shiv.min.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/media//respond.min.js'); ?>"></script>

    <![endif]-->


    <!-- Google Font -->
    <!--<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->

    <!-- Google Font -->
    <!--<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->

</head>
<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a style="background-color: white" href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/frontend-base/index.php/Examination_test_c'; ?>" tabindex="-1" class="logo">
            <?php if ($this->session->userdata("userType") == "V" || $this->session->userdata("userType") == "VC") { ?>
                <img src="<?php echo base_url(); ?>assets/images/vetpulz-Logo.png" style="width:45%;"/>
            <?php } else if ($this->session->userdata("userType") == "H") { ?>
                <img src="<?php echo base_url(); ?>assets/images/megapulz-Logo.png" style="width:45%;"/>
            <?php } else { ?>
                <img src="<?php echo base_url(); ?>assets/images/digitalpulz-min.png" style="width:45%;"/>
            <?php } ?>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- set date and time in header-->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="" class="user-image"
                                 alt="User Image" id="image">
                            <span class="hidden-xs"><?php echo $this->session->userdata('username') ;?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="" class="img-circle"
                                     alt="User Image" id="image2">

                                <p>
                                    <?php echo $this->session->userdata('username') ?>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/frontend-base/index.php/login/logout'; ?>"
                                       class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <!-- Control Sidebar Toggle Button -->
                    <!-- <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li> -->
                </ul>

            </div>
        </nav>
    </header>
    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }
            ; // add zero in front of numbers < 10
            return i;
        }

        $(document).ready(function () {

            console.log("document ready");
            var imagePath = '<?php echo base_url(); ?>emp_images/<?php echo ($this->session->userdata('employeeId')) . "-" . ($this->session->userdata('employee_no')) . ".jpg"; ?>';


            /*var http = new XMLHttpRequest();

            http.open('HEAD', imagePath, false);
            http.send();*/

           /* if (http.status != 404) {
                document.getElementById('image').src = imagePath;
                document.getElementById('image2').src = imagePath;
            } else {*/
                document.getElementById('image').src = '<?php echo base_url('/icons/Male.png'); ?>';
                document.getElementById('image2').src = '<?php echo base_url('/icons/Male.png'); ?>';

            //}
        });

        $('#backBtn').click(function () {
            window.location.href = "<?php echo base_url(); ?>index.php/main_view_c";
        });


    </script>