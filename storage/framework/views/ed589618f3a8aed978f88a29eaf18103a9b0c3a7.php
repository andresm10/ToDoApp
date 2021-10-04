

<?php $__env->startSection('content'); ?>

	<div class="content container-fluid">
	<?php echo $__env->make('users.toolbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo e(Form::open(array('url' => 'createUser', 'method'=>'post'))); ?>

          <?php echo csrf_field(); ?>

	        <div class="row">
	          	<div class="col">
	          		<h1 class="text-center">Nuevo Usuario</h1>
	          	</div>
          	</div>

          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="documentType">Tipo Documento</label>
	          	</div>
	          	<div class="col-4">
	          		<select class="form-control" required name="documentType">
	          			<option>Seleccione</option>
	          			<?php $__empty_1 = true; $__currentLoopData = $documentsType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documentType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($documentType->id); ?>"><?php echo e($documentType->description); ?></option>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
	          		</select>
	          	</div>

	          	<div class="col-2">
	          		<label for="documentNumber">N&uacute;mero de Documento</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="documentNumber" id="documentNumber" required class="form-control">
	          	</div>
          	</div>


          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="nameOne">Primer Nombre</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameOne" id="nameOne" required class="form-control">
	          	</div>

	          	<div class="col-2">
	          		<label for="nameTwo">Segundo Nombre</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameTwo" id="nameTwo" class="form-control">
	          	</div>
          	</div>


          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="nameThree">Primer Apellido</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameThree" id="nameThree" required class="form-control">
	          	</div>

	          	<div class="col-2">
	          		<label for="nameFour">Segundo Apellido</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameFour" id="nameFour" class="form-control">
	          	</div>
          	</div>


          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="birthdate">Fecha de Nacimiento</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="date" name="birthdate" id="birthdate" required class="form-control">
	          	</div>

	          	<div class="col-2">
	          		<label for="rol">Rol</label>
	          	</div>
	          	<div class="col-4">
	          		<select class="form-control" required name="rol">
	          			<option>Seleccione</option>
	          			<?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($rol->id); ?>"><?php echo e($rol->description); ?></option>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
	          		</select>
	          	</div>
          	</div>

          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="countryOrigin">Pa&iacute;s de Origen</label>
	          	</div>
	          	<div class="col-4">
	          		<select class="form-control" required name="countryOrigin">
	          			<option>Seleccione</option>
	          			<?php $__empty_1 = true; $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($country->id); ?>"><?php echo e($country->description); ?></option>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
	          		</select>
	          	</div>

	          	<div class="col-2">
	          		<label for="stateOrigin">Departamento/Estado de Origen</label>
	          	</div>
	          	<div class="col-4">
	          		<select class="form-control" required name="stateOrigin">
	          			<option>Seleccione</option>
	          			<?php $__empty_1 = true; $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($department->id); ?>"><?php echo e($department->description); ?></option>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
	          		</select>
	          	</div>
          	</div>


          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="cityOrigin">Ciudad de Origen</label>
	          	</div>
	          	<div class="col-4">
	          		<select class="form-control" required name="cityOrigin">
	          			<option>Seleccione</option>
	          			<?php $__empty_1 = true; $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $citie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($citie->id); ?>"><?php echo e($citie->description); ?></option>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
	          		</select>
	          	</div>

	          	<div class="col-2">
	          		<label for="email">E-mail</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="email" name="email" id="email" required class="form-control">
	          	</div>
          	</div>


          	<div class="row form-group">
          		<div class="col-2">
	          		<label for="email">Acceso a <br>(Ctrl+Clic)</label>
	          	</div>
	          	<div class="col-4">
		          	<select class="custom-select" multiple name="userApps[]" id="userApps" size="5">
					  	<?php $__empty_1 = true; $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($app->id); ?>"><?php echo e($app->description); ?></option>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
					</select>
				</div>

				<div class="col-2">
					<label>Roles por aplicaci&oacute;n</label>
				</div>
				<div class="col-4" id="rolByApp">
				</div>
          	</div>

          	<div class="row form-group">
	          	<div class="col text-center">
	          		<input type="submit" name="createUser" value="Crear" class="btn btn-primary">
	          	</div>
          	</div>
		<?php echo e(Form::close()); ?>

	</div>
	<script type="text/javascript" src="<?php echo e(asset('js/users.js')); ?>"></script>
	<script type="text/javascript">
		rolesByApp('<?php echo e(url("/rolesByApp")); ?>');
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>