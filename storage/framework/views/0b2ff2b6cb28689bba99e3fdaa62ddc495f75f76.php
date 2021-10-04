

	<?php $__env->startSection('content'); ?>
		<?php echo $__env->make('users.toolbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


	    <table class="table">
			<thead class="thead-dark">
		    	<tr>
					<th scope="col">#</th>
					<th scope="col">Usuario</th>
					<th scope="col">E-mail</th>
					<th scope="col">Validado</th>
					<th scope="col">Activo</th>
					<th scope="col">Fecha Creaci&oacute;n</th>
					<th scope="col">Editar</th>
		    	</tr>
	            <tr class="filters">
	                <th>&nbsp;</th>
	                <th><input type="text" class="form-control" placeholder=""></th>
	                <th><input type="text" class="form-control" placeholder=""></th>
	                <th><input type="text" class="form-control" placeholder=""></th>
	                <th><input type="text" class="form-control" placeholder=""></th>
	                <th><input type="text" class="form-control" placeholder=""></th>
	                <th>&nbsp;</th>
	            </tr>
		  	</thead>

			<tbody>
		  		<?php ($i = 1); ?>
				<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				    <tr>
						<th scope="row"><?php echo e($i++); ?></th>
						<td><?php echo e($user->username); ?></td>
						<td><?php echo e($user->email); ?></td>
						<td><?php echo e($user->validated); ?></td>
						<td><?php echo e($user->active); ?></td>
						<td><?php echo e($user->created_at); ?></td>
						<td><a href="edit_user/<?php echo e($user->id); ?>" class="btn btn-primary">Editar</a> </td>
				    </tr>
		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
		        	<tr>
		        		<td colspan="7">
		            		<p>No hay usuarios registrados.</p>
		        		</td>
		        	</tr>
		        <?php endif; ?>
			</tbody>
		</table>

		<div class="justify-content-center">
			<?php echo e($users->links()); ?>

		</div>



	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>