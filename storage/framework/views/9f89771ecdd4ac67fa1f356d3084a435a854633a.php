

	<?php $__env->startSection('content'); ?>
		<?php echo $__env->make('roles.toolbar_rol', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	    <table class="table">
			<thead class="thead-dark">
		    	<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Editar</th>
		    	</tr>
	            <tr class="filters">
	                <th>&nbsp;</th>
	                <th><input type="text" class="form-control" placeholder=""></th>
	                <th>&nbsp;</th>
	            </tr>
		  	</thead>
		  	<?php ($i = 1); ?>
			<tbody>
				<?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				    <tr>
						<th scope="row"><?php echo e($i++); ?></th>
						<td><?php echo e($rol->name); ?></td>
						<td><a href="/edit_rol/<?php echo e($rol->id); ?>" class="btn btn-primary">Editar</a> </td>
				    </tr>
		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
		        	<tr>
		        		<td colspan="3">
		            		<p>No hay roles creados.</p>
		        		</td>
		        	</tr>
		        <?php endif; ?>
			</tbody>
		</table>

		<div class="justify-content-center">
			<?php echo e($roles->links()); ?>

		</div>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>