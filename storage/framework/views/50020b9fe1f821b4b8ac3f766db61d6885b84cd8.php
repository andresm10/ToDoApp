

<?php $__env->startSection('content'); ?>

	<div class="content container-fluid">
		<?php echo $__env->make('users.toolbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php echo e(Form::open(array('url' => '/editUserInfo', 'method'=>'post'))); ?>

          <?php echo csrf_field(); ?>

          	<input type="hidden" name="id" id="id" value="<?php echo e($user->id); ?>">
	        <div class="row">
	          	<div class="col">
	          		<h1 class="text-center">Editar Usuario</h1>
	          	</div>
          	</div>

          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="documentType">Tipo Documento</label>
	          	</div>
	          	<div class="col-4">
	          		<select class="form-control" required name="documentType">
	          			<option value="0">Seleccione</option>
	          			<?php $__empty_1 = true; $__currentLoopData = $documentsType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documentType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($documentType->id); ?>" <?php if($documentType->id == $user->document_type_id): ?> selected <?php endif; ?> ><?php echo e($documentType->description); ?></option>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
	          		</select>
	          	</div>

	          	<div class="col-2">
	          		<label for="documentNumber">N&uacute;mero de Documento</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="documentNumber" id="documentNumber" required value="<?php echo e($user->document_number); ?>" class="form-control">
	          	</div>
          	</div>


          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="nameOne">Primer Nombre</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameOne" id="nameOne" required value="<?php echo e($user->name_1); ?>" class="form-control">
	          	</div>

	          	<div class="col-2">
	          		<label for="nameTwo">Segundo Nombre</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameTwo" id="nameTwo" value="<?php echo e($user->name_2); ?>" class="form-control">
	          	</div>
          	</div>


          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="nameThree">Primer Apellido</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameThree" id="nameThree" required value="<?php echo e($user->surname_1); ?>" class="form-control">
	          	</div>

	          	<div class="col-2">
	          		<label for="nameFour">Segundo Apellido</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameFour" id="nameFour" value="<?php echo e($user->surname_2); ?>" class="form-control">
	          	</div>
          	</div>


          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="birthdate">Fecha de Nacimiento</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="date" name="birthdate" id="birthdate" required value="<?php echo e($user->birthdate); ?>" class="form-control">
	          	</div>

	          	<div class="col-2">
	          		<label for="rol">Rol</label>
	          	</div>
	          	<div class="col-4">
	          		<select class="form-control" required name="rol">
	          			<option value="0">Seleccione</option>
	          			<?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($rol->id); ?>" <?php if($rol->id == $user->rol_id): ?> selected <?php endif; ?> ><?php echo e($rol->name); ?></option>
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
	          			<option value="0">Seleccione</option>
	          			<?php $__empty_1 = true; $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($country->id); ?>" <?php if($country->id == $user->country_id_origin): ?> selected <?php endif; ?> ><?php echo e($country->description); ?></option>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
	          		</select>
	          	</div>

	          	<div class="col-2">
	          		<label for="stateOrigin">Departamento/Estado de Origen</label>
	          	</div>
	          	<div class="col-4">
	          		<select class="form-control" required name="stateOrigin">
	          			<option value="0">Seleccione</option>
	          			<?php $__empty_1 = true; $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($department->id); ?>" <?php if($department->id == $user->department_id_origin): ?> selected <?php endif; ?> ><?php echo e($department->description); ?></option>
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
	          			<option value="0">Seleccione</option>
	          			<?php $__empty_1 = true; $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $citie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($citie->id); ?>" <?php if($citie->id == $user->city_id_origin): ?> selected <?php endif; ?> ><?php echo e($citie->description); ?></option>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
	          		</select>
	          	</div>
          	</div>


          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="email">E-mail</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="email" name="email" id="email" required value="<?php echo e($user->email); ?>" class="form-control">
	          	</div>

	          	<div class="col-2">
	          		<label for="active">Activo</label>
	          	</div>
	          	<div class="col-4">
	          		<select class="form-control" name="active">
	          			<option value="1">Si</option>
	          			<option value="0">No</option>
	          		</select>
	          	</div>
          	</div>


          	<div class="row form-group">
          		<div class="col-2">
	          		<label for="email">Acceso a <br>(Ctrl+Clic)</label>
	          	</div>
	          	<div class="col-4">
		          	<select class="custom-select" multiple name="userApps[]" id="userApps" size="5">
					  	<?php $__empty_1 = true; $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
							<option value="<?php echo e($app->id); ?>" <?php $__empty_2 = true; $__currentLoopData = $userApps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uApp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?> <?php if($uApp->id == $app->id): ?> selected <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?> <?php endif; ?>><?php echo e($app->description); ?></option>
            			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            			<?php endif; ?>
					</select>
				</div>

				<div class="col-2">
					<label>Roles por aplicaci&oacute;n</label>
				</div>
				<div class="col-4" id="rolByApp">
							<?php $__empty_1 = true; $__currentLoopData = $rolesByApp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rolesApp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<div class="input-group mb-3">
			          			<select class="form-control" name="rolesApp[]" id="">
			          				<?php $__empty_2 = true; $__currentLoopData = $rolesApp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
										<option value="<?php echo e($roles->id); ?>" <?php $__empty_3 = true; $__currentLoopData = $userApps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uApp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_3 = false; ?> <?php if($uApp->roles_id == $roles->id): ?> selected <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_3): ?> <?php endif; ?>><?php echo e($roles->description); ?></option>
										<?php echo e($nameApp=$roles->app_description); ?>

			          				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
			          				<?php endif; ?>
								</select>
								<div class="input-group-append-sm" aria-label="Small"><label for="" class="input-group-text"><?php echo e($nameApp); ?></label></div>
						</div>
		            		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
		            		<?php endif; ?>
		          	</select>
				</div>
          	</div>

          	<div class="row form-group">
	          	<div class="col text-center">
	          		<input type="submit" name="createUser" value="Editar" class="btn btn-primary">
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