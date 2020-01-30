<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- Bootstrap -->
    <!-- <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') ?>
    <!-- Font Awesome -->
    <!-- <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/font-awesome/css/font-awesome.min.css') ?>
    <!-- NProgress -->
    <!-- <link href="../vendors/nprogress/nprogress.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/nprogress/nprogress.css') ?>

    <!-- Custom Theme Style -->
    <!-- <link href="../build/css/custom.min.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/build/css/custom.min.css') ?>

    <?= $this->Html->css('../gentelella/style.css') ?>
</head>
<body class="nav-md">
    <div class="container body">
        <div id="content">
            <?= $this->Flash->render() ?>

            <?= $this->fetch('content') ?>
        </div>
        <div id="footer"></div>
    </div>
    <!-- /page content -->

<!-- jQuery -->
<!-- <script src="../vendors/jquery/dist/jquery.min.js"></script> -->
<?= $this->Html->script('../gentelella/vendors/jquery/dist/jquery.min.js') ?>
<!-- Bootstrap -->
<!-- <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
<?= $this->Html->script('../gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>
<!-- FastClick -->
<!-- <script src="../vendors/fastclick/lib/fastclick.js"></script> -->
<?= $this->Html->script('../gentelella/vendors/fastclick/lib/fastclick.js') ?>
<!-- NProgress -->
<!-- <script src="../vendors/nprogress/nprogress.js"></script> -->
<?= $this->Html->script('../gentelella/vendors/nprogress/nprogress.js') ?>
<!-- Custom Theme Scripts -->
<!-- <script src="../build/js/custom.min.js"></script> -->
<?= $this->Html->script('../gentelella/build/js/custom.min.js') ?>
</body>
</html>
