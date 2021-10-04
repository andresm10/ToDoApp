<?php $__env->startSection('content'); ?>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    Sesion Iniciada
                </div>
            </div>
        </div>
    </div>
</div>
 -->

    <div class="content container-fluid">
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-3 text-center">
                        <a href="<?php echo e($app->link); ?>" target="href">
                            <img src="<?php echo e(asset('images/icon_apps/'.$app->icon)); ?>" class="img-thumbnail" height="50">
                            <p class=""><?php echo e($app->description); ?></p>
                        </a>
                    </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col">
                <p>No tiene asignadas apps.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>