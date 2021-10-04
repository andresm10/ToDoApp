<?php $__env->startSection('content'); ?>
    	<div class="justify-content-center">
			<?php echo e(Form::open(array('url' => 'nueva_categoria', 'method'=>'post', 'class'=>'border p-3 form'))); ?>

        <div class="row">
          <div class="col">
            <h1 class="text-center">CATEGORIAS</h1>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <autocomplete-categorias></autocomplete-categorias>
          </div>
        </div>
        <div class="table-responsive-sm">
          <table class="table table-sm table-bordered table-hover">
            <thead class="thead-dark">
              <tr>
                <th>Nombre</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              
            <?php $__empty_1 = true; $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr>
                <td><?php echo e($categoria->nombre); ?></td>
                <td>
                  <a href="/cargar_categoria/<?php echo e($categoria->id); ?>" class="btn btn-link" title="Editar"><i class="material-icons">mode_edit</i></a>
                </td>
                <td>
                  <a href="/eliminar_categoria/<?php echo e($categoria->id); ?>" class="btn btn-link" style="color:#dc3545;" title="Eliminar"><i class="material-icons">delete</i></a>
                </td>
              </tr>
  		        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  <tr><td colspan="3">No tiene categorias registradas.</td></tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <input type="hidden" id="userId" value="<?php echo e(Auth::user()->id); ?>">
			<?php echo e(Form::close()); ?>

    	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>