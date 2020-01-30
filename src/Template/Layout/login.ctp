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
    <!-- <link href="gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/bootstrap/dist/css/bootstrap.min.css') ?>
    <!-- <link href="gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/font-awesome/css/font-awesome.min.css') ?>
    <!-- <link href="gentelella/vendors/nprogress/nprogress.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/nprogress/nprogress.css') ?>
    <!-- <link href="../vendors/animate.css/animate.min.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/vendors/animate.css/animate.min.css') ?>
    <!-- <link href="../build/css/custom.min.css" rel="stylesheet"> -->
    <?= $this->Html->css('../gentelella/build/css/custom.min.css') ?>
    <?= $this->Html->css('../gentelella/style.css') ?>
</head>
<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </section>
            </div>
        </div>
    </div>
</body>
</html>