<?php $__env->startSection('content'); ?>
    	 <div class="justify-content-center">
  			<?php echo e(Form::open(array('url' => '/editar_actividad', 'method'=>'post', 'class'=>'border p-3 form'))); ?>

          <?php echo csrf_field(); ?>
          <input type="hidden" name="id" id="id" value="<?php echo e($actividad->id); ?>">
          <div class="row">
              <div class="col">
                <h1 class="text-center">EDITAR ACTIVIDAD</h1>
              </div>
            </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label"><strong>Categoria</strong></label>
            <div class="col-sm-4">
              <select class="form-control" name="categoria">
                <?php $__empty_1 = true; $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <option <?php echo e(( $categoria->id == $actividad->categoria_id) ? 'selected' : ''); ?> value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  <option disabled>No hay categorias.</option>
                <?php endif; ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="text" name="actividad" required value="<?php echo e($actividad->actividad); ?>" class="form-control">
            </div>
          </div>
          <div class="row"><div class="col">&nbsp;</div></div>
          <div class="row form-group">
              <div class="col text-center">
                <input type="submit" value="Editar" class="btn btn-primary">
              </div>
            </div>
        <?php echo e(Form::close()); ?>

    	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>