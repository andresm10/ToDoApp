

<?php $__env->startSection('content'); ?>

	<div class="content container-fluid">
		<?php echo $__env->make('roles.toolbar_permission', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo e(Form::open(array('url' => 'createPermission', 'method'=>'post'))); ?>

	        <div class="row">
	          	<div class="col">
	          		<h1 class="text-center">Nuevo Permiso</h1>
	          	</div>
          	</div>

          	<div class="row form-group">
	          	<div class="col-4">
	          		<label for="name">Nombre</label>
	          	</div>
	          	<div class="col-6">
	          		<input type="text" name="name" id="name" required class="form-control">
	          	</div>
          	</div>

          	<div class="row form-group">
          		<div class="col-4">
	          		<label for="modulos">Modulo</label>
	          	</div>
	          	<div class="col-6">
	          		<select class="form-control" required name="modulo">
	          			<option value="0">Seleccione</option>
	          			<?php $__empty_1 = true; $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($modulo->id); ?>"><?php echo e($modulo->description); ?></option>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
	          		</select>
	          	</div>
	        </div>

          	<div class="row form-group">
	          	<div class="col text-center">
	          		<input type="submit" name="createPermission" value="Crear" class="btn btn-primary">
	          	</div>
          	</div>
		<?php echo e(Form::close()); ?>

	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>