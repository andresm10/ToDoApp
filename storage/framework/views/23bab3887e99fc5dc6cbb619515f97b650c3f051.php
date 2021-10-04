	<?php $__env->startSection('content'); ?>
		<div class="row">
			<div class="col text-center">
				<h1>Modulo de Roles</h1>
				<i class="material-icons" style="font-size: 30px;">accessibility</i>
			</div>
		</div>
		<?php echo $__env->make('roles.toolbar_rol', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	    <table class="table">
			<thead class="thead-dark">
		    	<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Editar</th>
					<th scope="col">Asignar Permisos</th>
		    	</tr>
	            <tr class="filters">
	                <th>&nbsp;</th>
	                <th><input type="text" class="form-control" placeholder=""></th>
	                <th>&nbsp;</th>
	                <th>&nbsp;</th>
	            </tr>
		  	</thead>
		  	<?php ($i = 1); ?>
		  	<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('visualizar_roles')): ?>
				<tbody>
					<?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					    <tr>
							<th scope="row"><?php echo e($i++); ?></th>
							<td><?php echo e($rol->name); ?></td>
							<td class="text-center"><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('modificar_rol')): ?> <a href="/edit_rol/<?php echo e($rol->id); ?>" class="btn btn-primary">Editar</a> <?php endif; ?></td>
							<td class="text-center"><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asignar_permisos_a_rol')): ?> <a href="/rol_permissions/<?php echo e($rol->id); ?>" class="btn btn-success">Permisos</a><?php endif; ?> </td>
					    </tr>
			        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			        	<tr>
			        		<td colspan="4">
			            		<p>No hay roles creados.</p>
			        		</td>
			        	</tr>
			        <?php endif; ?>
				</tbody>
			<?php else: ?>
				<tbody>
					<tr>
						<td colspan="4">
							<p>No tiene privilegios para visualizar los roles creados.</p>
						</td>
					</tr>
				</tbody>
			<?php endif; ?>
		</table>

		<div class="justify-content-center">
			<?php echo e($roles->links()); ?>

		</div>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>