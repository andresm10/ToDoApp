<div>
	<div class="row toolbar">
		<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('visualizar_roles')): ?>
			<div class="col-4 text-center">
				<a class="material-icons" href="/roles" style="font-size: 50px; cursor: pointer;">view_list</a>
				<p>Roles</p>
			</div>
		<?php endif; ?>

		<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear_rol')): ?>
	 		<div class="col-4 text-center">
				<a class="material-icons" href="/new_rol" style="font-size: 50px; cursor: pointer;">add</a>
				<p>Nuevo Rol</p>
			</div>
		<?php endif; ?>
	</div>
	<hr class="">
</div>