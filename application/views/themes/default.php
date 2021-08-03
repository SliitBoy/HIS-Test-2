<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php if($title!='') {echo $title;} else {echo 'HIS';}  ?></title>
  <link rel="icon" href="<?php echo base_url('assets'); ?>/img/dp.png" type="image/png" /> 
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="<?php echo base_url('assets'); ?>/plugins/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/css/animate.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/css/hover.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url('assets'); ?>/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/css/style.css">
  <script src="<?php echo base_url('assets'); ?>/plugins/jQuery/jquery-3.4.1.min.js"></script>
  <script src="<?php echo base_url('assets'); ?>/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>

  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url('assets'); ?>/css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <!-- Theme style -->
  <link href="<?php echo base_url('assets'); ?>/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url('assets'); ?>/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  <!-- Plugins Styles -->

  <!-- jQuery 2.1.3 -->
  <!-- Bootstrap 3.3.2 JS -->
  
  <script src="<?php echo base_url('assets'); ?>/plugins/bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- Datatables -->
  <script src="<?php echo base_url('assets'); ?>/js/jquery.dataTables.min.js" type="text/javascript"></script>
  
  <script  type="text/javascript" src="<?php echo base_url('assets'); ?>/plugins/ckeditor/ckeditor.js"></script>

  

  <!--bootstrap toggle-->
  
  <link href="<?php echo base_url('assets'); ?>/plugins/bootstrap-toggle-master/css/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url('assets'); ?>/plugins/bootstrap-toggle-master/js/bootstrap-toggle.min.js"></script>
  <link href="<?php echo base_url('assets'); ?>/plugins/jquery.steps-1.1.0/jquery.steps.css" rel="stylesheet" type="text/css"/>
  

  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      <?php
      if(!empty($meta))
       foreach($meta as $name=>$content){
        echo "\n\t\t";
        ?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
      }
      echo "\n";

      if(!empty($canonical))
      {
        echo "\n\t\t";
        ?><link rel="canonical" href="<?php echo $canonical?>" /><?php

      }
      echo "\n\t";

      foreach($css as $file){
       echo "\n\t\t";
       ?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
     } echo "\n\t";

     foreach($js as $file){
       echo "\n\t\t";
       ?><script src="<?php echo $file; ?>"></script><?php
     } echo "\n\t";
     ?>
     <style>
      .skin-black-light .content-wrapper{
      background-image: url("<?php echo base_url('assets'); ?>/images/pet.jpg");
      height: 100%; 

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    </style>
  </head>

  <body class="skin-black-light fixed layout-top-nav" style="height: auto; min-height: 100%;">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar">
          <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/vetpulz/index.php/Home_controller'; ?>" class="hidden-xs">

              <?php if ($this->session->userdata("userType") == "V" || $this->session->userdata("userType") == "VC") { ?>
                  <img src="<?php echo base_url(); ?>assets/images/vetpulz-Logo.png" style="width:45%;"/>
              <?php } else if ($this->session->userdata("userType") == "H") { ?>
                  <img src="<?php echo base_url(); ?>assets/images/megapulz-Logo.png" style="width:45%;"/>
              <?php } else { ?>
                  <img src="<?php echo base_url(); ?>assets/images/digitalpulz-min.png" style="width:45%;"/>
              <?php } ?>
          </a>
          <b style="font-size: 25px">VetPulz Dashboard</b>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li><a href= '#'  style="font-size: 20px"><span class="hidden-xs"><b><?php echo $this->session->userdata("hospitalName");?></b></span></a></li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url('assets'); ?>/img/Dog1.png" 150% class="user-image" alt="User Image"/>
                  <span class="hidden-xs">
                    <?php
                    $name = $this->session->userdata('userfullname');
                    if(isset($name) && !empty($name)){
                      echo ($name);
                    } else {
                      echo ('HIS');
                    }
                    ?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('assets'); ?>/img/Dog1.png" class="img-box" 150% alt="User Image" />
                    <p>
                      <?php
                      $name = $this->session->userdata('userfullname');
                      $level = $this->session->userdata('username');
                      if(isset($name) && !empty($name)){
                        echo ($name);
                        echo ('<small>Hello '.$level.'</small>');
                      } else {
                        echo ('HIS');
                        echo ('<small>Please Login</small>');
                      }
                      ?>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/vetpulz/login/logout'; ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

       <!-- Main content -->
       <section class="content">
         <div class="row">
          <?php echo $output;?>
        </div>
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class="main-footer" align="bottom">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="http://digitalpulz.com" target="_blank">Digital Pulz (Pvt.) Ltd.</a>.</strong> All rights reserved.
    </footer>
  </div><!-- ./wrapper -->



  <!-- SlimScroll -->
  <script src="<?php echo base_url('assets'); ?>/plugins/slimScroll/jquery.slimscroll.js" type="text/javascript"></script>
  <!-- FastClick -->
  <script src='<?php echo base_url('assets'); ?>/plugins/fastclick/fastclick.min.js'></script>

  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets'); ?>/js/app.min.js" type="text/javascript"></script>
  <!-- Plugins -->
  <script src='<?php echo base_url('assets'); ?>/plugins/datepicker/bootstrap-datepicker.js'></script>

  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/moment.js"></script>

  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/datatable/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/datatable/buttons.bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/datatable/jszip.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/datatable/pdfmake.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/datatable/vfs_fonts.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/datatable/buttons.html5.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets'); ?>/plugins/paginations/full_numbers_no_ellipses.js"></script>
  <script  type="text/javascript" src="<?php echo base_url('assets'); ?>/js/select2.min.js"></script>
  <script  type="text/javascript" src="<?php echo base_url('assets'); ?>/js/selectize.min.js"></script>
  <script  type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootbox.all.min.js"></script>
  <script  type="text/javascript" src="<?php echo base_url('assets'); ?>/plugins/chartjs/Chart.js"></script>


</body>
</html>