<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KatLove</title>
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
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('productos.index')); ?>">
                <button class="btn btn-white btn-custom"><i class="fa-solid fa-cloud-question fa-lg"></i>Productos</button>
            </a>
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('servicios.index')); ?>">
                <button class="btn btn-white btn-custom"><i class="fas fa-user fa-lg"></i>Servicios</button>
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
                    <h1>Productos</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form method="POST" action="<?php echo e(route('productos.store')); ?>">

                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="nombrep" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombrep" name="nombrep" required>
                        </div>
                        <div class="mb-3">
                            <label for="marcap" class="form-label">Marca</label>
                            <input type="text" class="form-control" id="marcap" name="marcap" required>
                        </div>
                        <div class="mb-3">
                            <label for="referenciap" class="form-label">Referencia</label>
                            <input type="text" class="form-control" id="referenciap" name="referenciap" required>
                        </div>
                        <div class="mb-3">
                            <label for="preciop" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="preciop" name="preciop" required step="0.01">
                        </div>
                        <div class="mb-3">
                            <label for="cantidadp" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidadp" name="cantidadp" required step="1">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\TallerUltimo\tallertesting\resources\views/productos/create.blade.php ENDPATH**/ ?>