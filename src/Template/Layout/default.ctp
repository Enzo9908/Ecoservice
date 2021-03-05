<?php $this->assign('title', 'Ecoservice'); ?>
<?php
$cakeDescription = 'Ecoservice';
?>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="FIRST DRINK">
    <meta name="keywords" content="">
    <meta name="author" content="FIRST DRINK">
    <meta name="robots" content="noindex, nofollow">
    <?= $this->fetch('meta') ?>
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <?= $this->Html->css([
        'bootstrap',
        'mdb.min.css',
        'style.min.css',
        'style.css'
    ]) ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('css') ?>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar  navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="<?= $this->Url->build('/') ?>">
                <strong class="green-text">Eco-Service</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="<?= $this->Url->build('/infos') ?>">A propos du site</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="<?= $this->Url->build('/contact') ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="<?= $this->Url->build('/catalogue') ?>">Catalogue</a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link waves-effect">

                            <i class="fas fa-shopping-cart"></i>
                            <span class="clearfix d-none d-sm-inline-block"> Panier </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $this->Url->build('/client/login') ?>" class="nav-link border border-light rounded waves-effect">Se
                            Connecter</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $this->Url->build('/client/add') ?>" class="nav-link border border-light rounded waves-effect">Créer un
                            compte</a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->


    <main class="main">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>

    <!--Footer-->
    <footer class="page-footer text-center font-small mt-4 wow fadeIn">
        <!--Copyright-->
        <div class="footer-copyright py-3">
            2021 Copyright:
            <a href="<?= $this->Url->build('/') ?>" title="Entreprise de recyclage et service de nettoyage" class="h1 text-footer"> Eco-Service.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <?= $this->Html->script([
        'jquery-3.4.1.min',
        'popper.min',
        'bootstrap.min',
        'mdb.min'
    ]);
    ?>
    <?= $this->fetch('script') ?>
</body>

</html>