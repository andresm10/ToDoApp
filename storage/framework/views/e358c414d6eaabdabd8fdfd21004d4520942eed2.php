<!DOCTYPE html>
<html>
<head>
  <title>Olvidé mi Contrase&ntilde;a</title>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">

</head>
  <body>
    <div class="container" role="main">
        <br><br>
        <div class="col-xs-12">
            <?php echo e(Form::open(array('url' => '/update_password', 'method'=>'post'))); ?>

            <div class="card center-block">
                <div class="card-header"> <h3>Nueva contrase&ntilde;a de Acceso</h3> </div>
                <div class="card-body">
                    <p></p>
                    <?php if(isset($link) && isset($email) && !session()->has('success')): ?>
                        <div class="form-group" class="card-text">
                            <p>
                                Por favor ingrese la nueva contrase&ntilde;a de acceso a la cuenta de email <strong><?php echo e($email); ?>.</strong>
                            </p>
                            <label for="password"><strong>Contrase&ntilde;a</strong> </label>
                            <input type="password" id="password" class="form-control" name="password" required placeholder="Ingres la contrase&ntilde;a">

                            <label for="repeat_password"><strong>Repetir Contrase&ntilde;a</strong> </label>
                            <input type="password" id="repeat_password" class="form-control" name="repeat_password" required placeholder="Repita la contrase&ntilde;a">

                            <input type="hidden" name="id" value="<?php echo e($id); ?>">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary" value="Actualizar contrase&ntilde;a" >
                        </div>

                    <?php else: ?>
                        <?php if(isset($failure)): ?>
                            <p><?php echo e($failure); ?></p>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php if(isset($failure)): ?>
                        <a href="<?php echo e($newLink); ?>" class="link">Generar nuevo enlace</a>
                    <?php endif; ?>

                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success">
                            <strong><?php echo e(session()->get('success')); ?></strong>
                        </div>
                        <a href="<?php echo e($login); ?>" class="link">Iniciar sesi&oacute;n</a>

                    <?php endif; ?>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <strong><?php echo e($errors->first()); ?></strong>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
        <div class="col-md-3"></div>
    </div> <!-- /container -->
  </body>
</html>