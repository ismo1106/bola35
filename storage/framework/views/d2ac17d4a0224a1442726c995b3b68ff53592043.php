<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/index.css')); ?>" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>;
        </script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                            <img class="logo" src="/img/logo2.png">
                            <!--<?php echo e(config('app.name', 'Laravel')); ?>-->
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            <li><a class="font-menu" href="<?php echo e(route('login')); ?>">Kuis</a></li>
                            <li><a class="font-menu" href="/play_game">Play Game</a></li>
                            <li><a class="font-menu" href="">Hadiah</a> </li>
                            <li><a class="font-menu" href="">Cara Mendaftar</a></li>
                            <li><a class="font-menu" href="">Cara Bermain</a></li>
                            <li><a class="font-menu" href="">Berita Bola</a></li>
                            <li><a class="font-menu" href="">Hubungi Kami</a></li>
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            <?php if(Auth::guest()): ?>
                            <!--li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li-->
                            <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <?php echo $__env->yieldContent('content'); ?>

            <footer class="footer">
                <div class="container text-center">
                    <div class="col-lg-12">
                        <a href="" class="ads"  target="_blank">
                            <img src="img/footer.jpg" title="" class="img-responsive center-block image-footer">
                        </a>
                    </div>
                    <p>Kuis yang kami selenggarakan adalah bebas biaya <br/>
                        <a class="link-footer" href="" target="_blank">www.football5star.com</a> tidak pernah meminta biaya apapun
                    </p>
                    <p>Pastikan alamat email dan no telepon anda diisi dengan benar. Kerahasiaan data anda terjamin, data kami butuhkan hanya untuk konfirmasi pengiriman hadiah</p>
                    <p>©2016 football5star All Rights Seserved. Berita Bola Sepak Bola <br />
                        <a class="link-footer" href="">Privacy Policy & Copyrights DMCA Compliance</a>
                    </p>
                </div>
            </footer>
        </div>

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html>
