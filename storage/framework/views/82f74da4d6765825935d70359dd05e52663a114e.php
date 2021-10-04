<?php $__env->startSection('content'); ?>
    	 <div class="justify-content-center">
  			<?php echo e(Form::open(array('url' => '/editar_categoria', 'method'=>'post', 'class'=>'border p-3 form'))); ?>

          <?php echo csrf_field(); ?>
          <input type="hidden" name="id" id="id" value="<?php echo e($categoria->id); ?>">
          <div class="row">
              <div class="col">
                <h1 class="text-center">EDITAR CATEGORIA</h1>
              </div>
            </div>
          <div class="row">
            <div class="col">
              <input type="text" name="categoria_nombre" required value="<?php echo e($categoria->nombre); ?>" class="form-control">
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