

	<?php $__env->startSection('content'); ?>
		<?php echo $__env->make('roles.toolbar_permission', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	    <table class="table">
			<thead class="thead-dark">
		    	<tr>
					<th scope="col">#</th>
					<th scope="col">Modulo</th>
					<th scope="col">Nombre</th>
					<th scope="col">Editar</th>
					<th scope="col">Eliminar</th>
		    	</tr>
	            <tr class="filters">
	                <th>&nbsp;</th>
	                <th><input type="text" class="form-control" placeholder=""></th>
	                <th><input type="text" class="form-control" placeholder=""></th>
	                <th>&nbsp;</th>
	                <th>&nbsp;</th>
	            </tr>
		  	</thead>
		  	<?php ($i = 1); ?>
		  	<pre>

		  	<?php

		  	print_r($permissions);
		  	 ?>
		  	</pre>
			<tbody>
				<?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				    <tr>
						<th scope="row"><?php echo e($i++); ?></th>
						<td><?php echo e($permission->name); ?></td>
						<td><?php echo e($permission->name); ?></td>
						<td><a href="/edit_permission/<?php echo e($permission->id); ?>" class="btn btn-primary">Editar</a> </td>
						<td><a href="/delete_permission/<?php echo e($permission->id); ?>" class="btn btn-danger">Eliminar</a> </td>
				    </tr>
		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
		        	<tr>
		        		<td colspan="5">
		            		<p>No hay roles creados.</p>
		        		</td>
		        	</tr>
		        <?php endif; ?>
			</tbody>
		</table>

		<div class="justify-content-center">
			<?php echo e($permissions->links()); ?>

		</div>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>