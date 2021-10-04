<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Sistema de Autenticacion de Aplicaciones || LogicalSoft')); ?></title>

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <!-- <script src="<?php echo e(asset('js/jquery-slim.min.js')); ?>" ></script> -->

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/nav-bar.css')); ?>" rel="stylesheet">
    <!-- Material Design -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <div id="app" class="">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel mb-auto">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(url('/user_apps')); ?>">
                    <?php echo e(config('app.name', 'Sistema de Autenticacion de Aplicaciones || LogicalSoft')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/login"><?php echo e(__('Iniciar Sesión')); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->username); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <?php echo e(__('Salir')); ?> </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <main class="container-full">
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar" class="active">
                <ul class="list-unstyled components">

                    <?php $__empty_1 = true; $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li>
                            <a href="<?php echo e($module->link); ?>" class="">
                                <i class="material-icons" style="cursor:pointer; font-size:45px;"><?php echo e($module->min_icon); ?></i>
                                <span style=""><?php echo e($module->description); ?></span>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>No hay modulos parametrizados.</p>
                    <?php endif; ?>
                </ul>
            </nav>

            <div class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </main>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">
        /*$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                console.log("HOLIII");
                $('#sidebar').toggleClass('active');
            });
        });*/
    </script>
    <script type="text/javascript">
    </script>
</body>
</html>
