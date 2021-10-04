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
            <div class="col text-center">
                <h1>Mis Apps</h1>
                <i class="material-icons" style="font-size: 30px;">apps</i>
            </div>
        </div>
        <div class="row">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('mis_apps')): ?>
                <?php $__empty_1 = true; $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-3 text-center">
                        <?php echo e(Form::open(array('url' => $app->link, 'method'=>'POST', 'id'=>'formApp'.$app->id, 'target'=>'_blank' ))); ?>

                            <input type="hidden" name="token" value="<?php echo e(Auth::user()->api_token); ?>">
                            <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                            <input type="hidden" name="id_otros" value="<?php echo e(Auth::user()->user_id_otros); ?>">
                            <input type="hidden" name="username" value="<?php echo e(Auth::user()->username); ?>">
                            <input type="hidden" name="nit" value="<?php echo e(Auth::user()->nit); ?>">
                            <input type="hidden" name="licencia" value="<?php echo e(Auth::user()->license_id); ?>">

                            <?php if($app->id==0): ?>
                            <input type="hidden" name="roles" value="<?php echo e($roles); ?>" >
                            <?php endif; ?>
                            <a href="#" id="" onclick="submitForm(<?php echo e($app->id); ?>)">
                                <img src="<?php echo e(asset('images/icon_apps/'.$app->icon)); ?>" id="" class="img-thumbnail" height="50">
                                <p class=""><?php echo e($app->description); ?></p>
                            </a>
                        <?php echo e(Form::close()); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col">
                        <p>No tiene asignadas apps.</p>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="col">
                    <p>No tiene privilegios para acceder a este modulo.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <script type="text/javascript">
        function submitForm(id){
            document.getElementById("formApp"+id).submit();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>