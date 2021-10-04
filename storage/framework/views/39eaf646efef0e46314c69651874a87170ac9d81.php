

<?php $__env->startSection('content'); ?>

	<div class="content container-fluid">
		<?php echo $__env->make('roles.toolbar_permission', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php echo e(Form::open(array('url' => '/editPermissionInfo', 'method'=>'post'))); ?>

          	<input type="hidden" name="id" id="id" value="<?php echo e($permission->id); ?>">
	        <div class="row">
	          	<div class="col">
	          		<h1 class="text-center">Editar Permiso</h1>
	          	</div>
          	</div>

          	<div class="row form-group">
	          	<div class="col-4">
	          		<label for="name">Nombre</label>
	          	</div>
	          	<div class="col-6">
	          		<input type="text" name="name" id="name" value="<?php echo e($permission->name); ?>" required class="form-control">
	          	</div>
          	</div>

          	<div class="row form-group">
	          	<div class="col text-center">
	          		<input type="submit" name="editRol" value="Editar" class="btn btn-primary">
	          	</div>
          	</div>

		<?php echo e(Form::close()); ?>

	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>