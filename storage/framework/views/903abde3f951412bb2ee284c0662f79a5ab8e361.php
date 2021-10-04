	<?php $__env->startSection('content'); ?>
		<div class="row">
			<div class="col text-center">
				<h1>Modulo de Permisos</h1>
				<i class="material-icons" style="font-size: 30px;">lock</i>
			</div>
		</div>
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
			<tbody>
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('visualizar_permisos')): ?>
					<?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					    <tr>
							<th scope="row"><?php echo e($i++); ?></th>
							<td><?php echo e($permission->module->description); ?></td>
							<td><?php echo e($permission->name_front); ?></td>
							<td><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('modificar_permiso')): ?> <a href="/edit_permission/<?php echo e($permission->id); ?>" class="btn btn-primary">Editar</a> <?php endif; ?> </td>
							<td><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('eliminar_permiso')): ?> <a href="/delete_permission/<?php echo e($permission->id); ?>" class="btn btn-danger">Eliminar</a> <?php endif; ?></td>
					    </tr>
			        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			        	<tr>
			        		<td colspan="5">
			            		<p>No hay permisos creados.</p>
			        		</td>
			        	</tr>
			        <?php endif; ?>
			    <?php else: ?>
			    	<tr>
		        		<td colspan="5">
		            		<p>No tiene privilegios para visualizar los permisos creados.</p>
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