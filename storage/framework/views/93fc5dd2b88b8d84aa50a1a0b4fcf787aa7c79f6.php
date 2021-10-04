<?php $__env->startSection('content'); ?>
    	 <div class="justify-content-center">
			<?php echo e(Form::open(array('url' => 'nueva_actividad', 'method'=>'post', 'class'=>'border p-3 form'))); ?>

				<div class="row">
					<div class="col-8">
	        			<input type="text" class="form-control" name="actividad" required>
	        		</div>
	        		<div class="col-4">
					    <button type="submit" class="btn btn-success">Agregar</button>
					    <button type="submit" class="btn btn-primary">Buscar</button>
					</div>
      			</div>
      			<div class="row">
      				<div class="col">&nbsp;</div>
      			</div>
                <?php $__empty_1 = true; $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                	<div class="row">
                		<div class="col"><input type="checkbox" name=""></div>
                		<div class="col"><?php echo e($actividad->actividad); ?></div>
                		<div class="col"><i class="material-icons">mode_edit</i></div>
                		<div class="col"><i class="material-icons">delete</i></div>
                	</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>No tiene actividades registradas.</p>
                <?php endif; ?>
			<?php echo e(Form::close()); ?>

    	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>