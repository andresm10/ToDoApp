<?php $__env->startSection('content'); ?>

	<div class="content container-fluid">
		<?php echo $__env->make('users.toolbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php echo e(Form::open(array('url' => '/editar_usuario', 'method'=>'post'))); ?>

          <?php echo csrf_field(); ?>

          	<input type="hidden" name="id" id="id" value="<?php echo e($user->id); ?>">
	        <div class="row">
	          	<div class="col">
	          		<h1 class="text-center">EDITAR USUARIO</h1>
	          	</div>
          	</div>

          	<div class="row form-group">

	          	<div class="col-2">
	          		<label for="documentNumber">N&uacute;mero de Documento</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="documentNumber" id="documentNumber" required value="<?php echo e($user->numero_documento); ?>" class="form-control">
	          	</div>
          	</div>


          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="nameOne">Primer Nombre</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameOne" id="nameOne" required value="<?php echo e($user->primer_nombre); ?>" class="form-control">
	          	</div>

	          	<div class="col-2">
	          		<label for="nameTwo">Segundo Nombre</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameTwo" id="nameTwo" value="<?php echo e($user->segundo_nombre); ?>" class="form-control">
	          	</div>
          	</div>


          	<div class="row form-group">
	          	<div class="col-2">
	          		<label for="nameThree">Primer Apellido</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameThree" id="nameThree" required value="<?php echo e($user->primer_apellido); ?>" class="form-control">
	          	</div>

	          	<div class="col-2">
	          		<label for="nameFour">Segundo Apellido</label>
	          	</div>
	          	<div class="col-4">
	          		<input type="text" name="nameFour" id="nameFour" value="<?php echo e($user->segundo_apellido); ?>" class="form-control">
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
	          			<option <?php echo e(( $user->activo == 1) ? 'selected' : ''); ?> value="1">Si</option>
	          			<option <?php echo e(( $user->activo == 0) ? 'selected' : ''); ?> value="0">No</option>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>