<?php $cakeDescription = 'Sổ Tay'; ?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $cakeDescription ?></title>
    <?= $this->Html->meta('favicon.ico','gentelella/img/facon.png',array('type' => 'icon')); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0"> -->
   

    <!-- Bootstrap -->
    <!-- <link href="gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') ?>
    

    <!-- Font Awesome -->
    <!-- <link href="gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/font-awesome/css/font-awesome.min.css') ?>

    <!-- NProgress -->
    <!-- <link href="gentelella/vendors/nprogress/nprogress.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/nprogress/nprogress.css') ?>

    <!-- iCheck -->
    <!-- <link href="gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/iCheck/skins/flat/green.css') ?>

    <!-- bootstrap-progressbar -->
    <!-- <link href="gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>

    <!-- JQVMap -->
    <!-- <link href="gentelella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/> -->
    <?= $this->Html->css('../gentelella/vendors/jqvmap/dist/jqvmap.min.css') ?>

    <!-- bootstrap-daterangepicker -->
    <!-- <link href="gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>

    <!-- Custom Theme Style -->
    <!-- <link href="gentelella/build/css/custom.min.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/build/css/custom.min.css') ?>

    <?= $this->Html->css('../gentelella/style.css') ?>
</head>
<body class="nav-md">
     <!-- jQuery -->
    <!-- <script src="gentelella/vendors/jquery/dist/jquery.min.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/jquery/dist/jquery.min.js') ?>

    <!-- Bootstrap -->
    <!-- <script src="gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>

    <div class="container body">
        <div class="main_container">
            <?= $this->element('siderbar'); ?>
            <?= $this->element('top_navigation'); ?>

            <!-- page content -->
            <div class="right_col" role="main">
                <?= $this->Flash->render() ?>
                <div class="container clearfix">
                    <?= $this->fetch('content') ?>
                </div>
            </div><!-- /page content -->

            <?= $this->element('footer'); ?>
        </div><!-- /container body -->
    </div><!-- /main_container -->
   

    <!-- FastClick -->
    <!-- <script src="gentelella/vendors/fastclick/lib/fastclick.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/fastclick/lib/fastclick.js') ?>

    <!-- NProgress -->
    <!-- <script src="gentelella/vendors/nprogress/nprogress.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/nprogress/nprogress.js') ?>

    <!-- Chart.js -->
    <!-- <script src="gentelella/vendors/Chart.js/dist/Chart.min.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/Chart.js/dist/Chart.min.js') ?>

    <!-- gauge.js -->
    <!-- <script src="gentelella/vendors/gauge.js/dist/gauge.min.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/gauge.js/dist/gauge.min.js') ?>

    <!-- bootstrap-progressbar -->
    <!-- <script src="gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>

    <!-- iCheck -->
    <!-- <script src="gentelella/vendors/iCheck/icheck.min.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/iCheck/icheck.min.js') ?>

    <!-- Skycons -->
    <!-- <script src="gentelella/vendors/skycons/skycons.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/skycons/skycons.js') ?>

    <!-- Flot -->
    <!-- <script src="gentelella/vendors/Flot/jquery.flot.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/Flot/jquery.flot.js') ?>

    <!-- <script src="gentelella/vendors/Flot/jquery.flot.pie.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/Flot/jquery.flot.pie.js') ?>

    <!-- <script src="gentelella/vendors/Flot/jquery.flot.time.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/Flot/jquery.flot.time.js') ?>

    <!-- <script src="gentelella/vendors/Flot/jquery.flot.stack.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/Flot/jquery.flot.stack.js') ?>

    <!-- <script src="gentelella/vendors/Flot/jquery.flot.resize.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/Flot/jquery.flot.resize.js') ?>

    <!-- Flot plugins -->
    <!-- <script src="gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>

    <!-- <script src="gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js') ?>

    <!-- <script src="gentelella/vendors/flot.curvedlines/curvedLines.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/flot.curvedlines/curvedLines.js') ?>

    <!-- DateJS -->
    <!-- <script src="gentelella/vendors/DateJS/build/date.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/DateJS/build/date.js') ?>

    <!-- JQVMap -->
    <!-- <script src="gentelella/vendors/jqvmap/dist/jquery.vmap.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/jqvmap/dist/jquery.vmap.js') ?>

    <!-- <script src="gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>

    <!-- <script src="gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>

    <!-- bootstrap-daterangepicker -->
    <!-- <script src="gentelella/vendors/moment/min/moment.min.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/moment/min/moment.min.js') ?>

    <!-- <script src="gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>

    <!-- Custom Theme Scripts -->
    <!-- <script src="gentelella/build/js/custom.min.js"></script> -->
    <?= $this->Html->script('../gentelella/build/js/custom.min.js') ?>

    <!-- <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script> -->
    <?= $this->Html->script('../gentelella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') ?>

    <!-- <script src="../vendors/validator/validator.js"></script> -->
    <?= $this->Html->script('../gentelella/js/jquery-validation/dist/jquery.validate.min.js') ?>

    <?= $this->Html->script('../gentelella/js/style.js') ?>
</body>
</html>
