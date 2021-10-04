<?php $__env->startSection('content'); ?>

	<div class="content container-fluid">
		<div class="row toolbar">

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sub-modulo_de_roles')): ?>
			<div class="col-4 text-center" style="font-size: 30px;">
		        <a href="/roles">Roles
		        	<i class="material-icons" style="font-size: 30px;">accessibility</i>
		        </a>
			</div>
			<?php else: ?>
				<div class="col-4">
					<p>No tiene privilegios para acceder al administrador de roles.</p>
				</div>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sub-modulo_de_permisos')): ?>
		 		<div class="col-4 text-center" style="font-size: 30px;">
					<a href="/permissions">Permisos
			          	<i class="material-icons" style="font-size: 30px;">lock</i>
			        </a>
				</div>
			<?php else: ?>
				<div class="col-4">
					<p>No tiene privilegios para acceder al administrador de permisos.</p>
				</div>
			<?php endif; ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>