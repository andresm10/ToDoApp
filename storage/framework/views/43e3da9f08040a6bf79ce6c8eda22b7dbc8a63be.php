<?php $__env->startSection('content'); ?>

	<div class="content container-fluid">
		<?php echo $__env->make('roles.toolbar_rol', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php echo e(Form::open(array('url' => '/editRolInfo', 'method'=>'post'))); ?>

          	<input type="hidden" name="id" id="id" value="<?php echo e($rol->id); ?>">
	        <div class="row">
	          	<div class="col">
	          		<h1 class="text-center">Editar Rol</h1>
	          	</div>
          	</div>

          	<div class="row form-group">
	          	<div class="col-4">
	          		<label for="name">Nombre</label>
	          	</div>
	          	<div class="col-6">
	          		<input type="text" name="name" id="name" value="<?php echo e($rol->name); ?>" required class="form-control">
	          	</div>
          	</div>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('eliminar_rol')): ?>
	          	<div class="row form-group">
		          	<div class="col-4">
		          		<label for="active">Activo</label>
		          	</div>
		          	<div class="col-6">
		          		<select class="form-control" name="active">
		          			<option value="1">Si</option>
		          			<option value="0">No</option>
		          		</select>
		          	</div>
	          	</div>
          	<?php else: ?>
          		<input type="hidden" name="active" value="1">
          	<?php endif; ?>

          	<div class="row form-group">
          		<div class="col-4">
	          		<label for="modulos">Permisos</label>
	          	</div>
	          	<div class="col-8">
	          		<select class="custom-select mw-150" required name="permisos[]" multiple size="15">
	          			<?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <optgroup label="<?php echo e($permission->description); ?>" >
	                            <?php $__currentLoopData = $permission->permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                            	<option value="<?php echo e($p->name); ?>"><?php echo e($p->name); ?></option>
	                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        	</optgroup>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
	          		</select>
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