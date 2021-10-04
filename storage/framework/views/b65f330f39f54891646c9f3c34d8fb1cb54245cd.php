<?php $__env->startSection('content'); ?>
    	<div class="justify-content-center">
			<?php echo e(Form::open(array('url' => 'nueva_actividad', 'method'=>'post', 'class'=>'border p-3 form'))); ?>

        <div class="row">
          <div class="col">
            <h1 class="text-center">ACTIVIDADES</h1>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Categoria</strong></label>
          <div class="col-sm-4">
            <select class="form-control" name="categoria">
              <?php $__empty_1 = true; $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <option disabled>No hay categorias.</option>
              <?php endif; ?>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <autocomplete-actividades></autocomplete-actividades>
          </div>
        </div>
        <div class="table-responsive-sm" id="container_actividades">
          <table class="table table-sm table-bordered table-hover">
            <thead class="thead-dark">
              <tr>
                <th>&nbsp;</th>
                <th>Categoria</th>
                <th>Actividad</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
              
            <?php $__empty_1 = true; $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
              <td>
                <input type="checkbox" name="check_actividad" id="actividad<?php echo e($actividad->actividad_id); ?>" title="Finalizar" onclick="finalizarActividad(<?php echo e($actividad->actividad_id); ?>)" style="cursor: pointer;" <?php echo e(( $actividad->estado == 1) ? 'checked' : ''); ?>>
              </td>  
              <td><?php echo e($actividad->nombre); ?></td>
              <td><?php echo e($actividad->actividad); ?></td>
              <td>
                <a href="/cargar_actividad/<?php echo e($actividad->actividad_id); ?>" class="btn btn-link" title="Editar"><i class="material-icons">mode_edit</i></a>
              </td>
              <td>
                <a href="/eliminar_actividad/<?php echo e($actividad->actividad_id); ?>" class="btn btn-link" style="color:#dc3545;" title="Eliminar"><i class="material-icons">delete</i></a>
              </td>
            </tr>
		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="5">No tiene actividades registradas.</td></tr>
            <?php endif; ?>
            </tbody>
          </table>
        </div>
        <input type="hidden" id="userId" value="<?php echo e(Auth::user()->id); ?>">
			<?php echo e(Form::close()); ?>

    	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>