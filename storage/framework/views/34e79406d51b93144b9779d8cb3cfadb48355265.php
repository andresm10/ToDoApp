	<?php $__env->startSection('content'); ?>

		<div class="row">
			<div class="col text-center">
				<h1>USUARIOS</h1>
			</div>
		</div>
		<?php echo $__env->make('users.toolbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="table-responsive-sm">
          <table class="table table-sm table-bordered table-hover">
				<thead class="thead-dark">
			    	<tr>
						<th scope="col" class="text-center">#</th>
						<th scope="col" class="text-center">Nombre</th>
						<th scope="col" class="text-center">E-mail</th>
						<th scope="col" class="text-center">Usuario</th>
						<th scope="col" class="text-center">Activo</th>
						<th scope="col" class="text-center">&nbsp;</th>
			    	</tr>
			  	</thead>

				<tbody>
			  		<?php ($i = 1); ?>
						<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						    <tr>
								<th scope="row"><?php echo e($i++); ?></th>
								<td><?php echo e($user->primer_nombre.' '.$user->segundo_nombre.' '.$user->primer_apellido.' '.$user->segundo_apellido); ?></td>
								<td><?php echo e($user->email); ?></td>
								<td><?php echo e($user->nombre_usuario); ?></td>
								<td><?php echo e(( $user->activo == 1) ? 'Si' : 'No'); ?></td>
								<td><a href="cargar_usuario/<?php echo e($user->id); ?>" class="btn btn-link"><i class="material-icons">mode_edit</i></a></td>
						    </tr>
				        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				        	<tr>
				        		<td colspan="5">
				            		<p>No hay usuarios registrados.</p>
				        		</td>
				        	</tr>
				        <?php endif; ?>
				</tbody>
			</table>
		</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>