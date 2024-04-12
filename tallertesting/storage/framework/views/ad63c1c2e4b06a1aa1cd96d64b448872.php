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
  
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="text-center" style="margin-top: 20px;">
                    <img src="<?php echo e(asset('images/kat.webp')); ?>" alt="Logo" class="logo-img-small">
                    <H1> Bienvenido, Elige una opcion de la Barra de Navegación </H1>
                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>
</html>
    <?php /**PATH C:\xampp\htdocs\TallerUltimo\tallertesting\resources\views/home.blade.php ENDPATH**/ ?>