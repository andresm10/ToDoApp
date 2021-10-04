

<?php $__env->startSection('content'); ?>

	<div class="content container-fluid">
		<?php echo $__env->make('roles.toolbar_rol', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo e(Form::open(array('url' => 'createRol', 'method'=>'post'))); ?>

	        <div class="row">
	          	<div class="col">
	          		<h1 class="text-center">Nuevo Rol</h1>
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
	          	<div class="col text-center">
	          		<input type="submit" name="createRol" value="Crear" class="btn btn-primary">
	          	</div>
          	</div>
		<?php echo e(Form::close()); ?>

	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>