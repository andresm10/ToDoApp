	<?php $__env->startSection('content'); ?>
		<?php echo $__env->make('roles.toolbar_rol', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="content container-fluid">
		<?php echo e(Form::open(array('url' => 'addPermissions', 'method'=>'post'))); ?>

	        <div class="row">
	          	<div class="col">
	          		<h1 class="text-center">Rol <?php echo e($rol->name); ?></h1>
	          	</div>
          	</div>

          	<div class="row form-group">
          		<input type="hidden" name="rol" value="<?php echo e($rol->id); ?>">
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
	          		<input type="submit" name="addPermissions" value="Asignar" class="btn btn-primary">
	          	</div>
          	</div>
		<?php echo e(Form::close()); ?>

	</div>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>