

<?php $__env->startSection('content'); ?>

	<div class="content container-fluid">
		<div class="row toolbar">

			<div class="col-4 text-center" style="font-size: 30px;">
		        <a href="/roles">Roles
		        	<i class="material-icons" style="font-size: 30px;">accessibility</i>
		        </a>
			</div>

	 		<div class="col-4 text-center" style="font-size: 30px;">
				<a href="/permissions">Permisos
		          	<i class="material-icons" style="font-size: 30px;">accessibility_new</i>
		        </a>
			</div>

		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>