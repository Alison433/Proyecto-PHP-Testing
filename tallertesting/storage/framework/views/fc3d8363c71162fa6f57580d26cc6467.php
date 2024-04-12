<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KatLove-Editar</title>
<link rel="icon" type="image/png" href="<?php echo e(asset('images/kat.webp')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    
        /** Header **/
        
        .header-landing {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 10px 20px;
          background-color: #ffffff;
      }
      .wrap-logo {
                /* Ajusta el tamaño del logo según sea necesario */
                width: 100px;
            }
    
            .wrap-buttons {
                display: flex;
                align-items: center;
            }
    
            .wrap-buttons button {
                margin-left: 10px; /* Ajusta el espacio entre los botones */
            }
            .logo-img-small {
        width: 100px; /* Tamaño deseado en píxeles */
    }
    
      </style>
</head>
<body>
    <header class="header-landing">
    
   
        <div class="wrap-buttons">
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">
                <button class="btn btn-white btn-custom"><i class="fa-solid fa-cloud-question fa-lg"></i>Inicio</button>
            </a>
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('empleados.index')); ?>">
                <button class="btn btn-white btn-custom"><i class="fas fa-user fa-lg"></i>Empleados</button>
            </a>
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('clientes.index')); ?>">
                <button class="btn btn-white btn-custom"><i class="fas fa-user fa-lg"></i>Clientes</button>
            </a>
            <div class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <?php echo e(Auth::user()->name); ?>

                </a>
    
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>
    
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
        </div>
        
    
    </header>
  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center" style="margin-top: 20px;">
                    <img src="<?php echo e(asset('images/kat.webp')); ?>" alt="Logo" class="logo-img-small">
                    <h1>Clientes</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form method="POST" action="<?php echo e(route('clientes.update', $clientes->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="mb-3">
                            <label for="nombrec" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombrec" name="nombrec" required value="<?php echo e(old('nombrec', $clientes->nombrec)); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="apellidoc" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellidoc" name="apellidoc" required value="<?php echo e(old('apellidoc', $clientes->apellidoc)); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="edadc" class="form-label">Edad</label>
                            <input type="number" class="form-control" id="edadc" name="edadc" required step="1" value="<?php echo e(old('edadc', $clientes->edadc)); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="correo_electronicoc" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo_electronicoc" name="correo_electronicoc" required value="<?php echo e(old('correo_electronicoc', $clientes->correo_electronicoc)); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="telefonoc" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefonoc" name="telefonoc" required pattern="[0-9]{10}" value="<?php echo e(old('telefonoc', $clientes->telefonoc)); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="fecha_nacimientoc" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimientoc" name="fecha_nacimientoc" required value="<?php echo e(old('fecha_nacimientoc', $clientes->fecha_nacimientoc)); ?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\TallerUltimo\tallertesting\resources\views/clientes/edit.blade.php ENDPATH**/ ?>