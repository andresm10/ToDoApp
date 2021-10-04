<div>
	<div class="row toolbar">

		<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('visualizar_permisos')): ?>
		<div class="col-4 text-center">
			<a class="material-icons" href="/permissions" style="font-size: 50px; cursor: pointer;">view_list</a>
			<p>Permisos</p>
		</div>
		<?php endif; ?>

		<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear_permiso')): ?>
	 		<div class="col-4 text-center">
				<a class="material-icons" href="/new_permission" style="font-size: 50px; cursor: pointer;">add</a>
				<p>Nuevo Permiso</p>
			</div>
		<?php endif; ?>
	</div>
	<hr class="">
</div>