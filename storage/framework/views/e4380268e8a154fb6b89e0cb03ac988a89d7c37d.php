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
        <?php echo e(Form::open(array('url' => '/recover_password', 'method'=>'post'))); ?>

          <div class="card center-block">
            <div class="card-header"> <h3>Restaurar contrase&ntilde;a</h3> </div>
            <div class="card-body">
              <p></p>
              <?php if(session()->has('success')): ?>
                <div class="alert alert-success">
                  <strong><?php echo e(session()->get('success')); ?></strong>
                </div>
                <a href="<?php echo e(session()->get('link')); ?>" class="link">Iniciar sesi&oacute;n</a>

              <?php else: ?>
                <div class="form-group" class="card-text">
                  <p>Ingrese la dirección de correo asociada a su cuenta para generar y validar una nueva contrase&ntilde;a. Si no recibe el correo de validacion por favor pongase en contaco con el administrador del sistema al siguiente correo electr&oacute;nico: <a href="mailto:andresmajin7@gmail.com">andresmajin7@gmail.com</a>.</p>
                  <label for="email"><strong>E-mail</strong> </label>
                  <input type="email" id="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Generar contrase&ntilde;a" >
                </div>
              <?php endif; ?>
              <a href="<?php echo e($link); ?>" class="link">Iniciar sesi&oacute;n</a>


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