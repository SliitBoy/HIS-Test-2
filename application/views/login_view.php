<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Digital Pulz</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    
</head>
<body class="login-page">
    <div class="login-box">
     
        <div class="login-box-body">
            <div class="login-logo">
                <img src="<?php echo base_url('images/dp_logo.png'); ?>" height="50%" width="50%"/>
            </div><!-- /.login-logo -->
            <p class="login-box-msg">Sign in to start your session</p>
            <?php echo validation_errors(); ?>
            <form action="<?php echo(base_url().'index.php/login/login_validate') ?>" method="post">
                <div class="form-group has-feedback">
                    <input id="username" class="form-control" placeholder="User Name" name="username" type="text" required="Required" autofocus>
                    <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span>-->
                </div>
                <div class="form-group has-feedback">
                    <input id="password" class="form-control" placeholder="Password" name="password" type="password" required="Required" value="">
                    <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
                </div>
                <div class="form-group has-feedback">
                    <select id="hospital" class="form-control" name="hospital" required="Required" value="">
                        <option value="99">Test Hospital</option>
                    <?php for($i = 0; $i<sizeof($hospitalDetails); $i++) { ?>
                        <option id="<?php echo $hospitalDetails[$i]->hospitalHINId; ?>" value="<?php echo $hospitalDetails[$i]->hospitalHINId.':'.$hospitalDetails[$i]->hospitalName.':'.$hospitalDetails[$i]->hospitalId; ?>"><?php echo $hospitalDetails[$i]->hospitalName; ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="row">
                    <div class="col-xs-12" align="center">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>

            <div class="login-box-body">
                <p class="login-box-msg">Current IP address : <?php echo getHostByName(getHostName())."/Base" ?></p>
            </div>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            if (sessionStorage.getItem("notify") != null)
                sessionStorage.removeItem("notify");
        });

        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
        });
    </script>
</body>
</html>