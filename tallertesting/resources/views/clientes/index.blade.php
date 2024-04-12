<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KatLove-Clientes</title>
<link rel="icon" type="image/png" href="{{ asset('images/kat.webp') }}">
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
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                <button class="btn btn-white btn-custom"><i class="fa-solid fa-cloud-question fa-lg"></i>Inicio</button>
            </a>
            <a class="nav-link active" aria-current="page" href="{{ route('empleados.index') }}">
                <button class="btn btn-white btn-custom"><i class="fas fa-user fa-lg"></i>Empleados</button>
            </a>
            <a class="nav-link active" aria-current="page" href="{{ route('clientes.index') }}">
                <button class="btn btn-white btn-custom"><i class="fas fa-user fa-lg"></i>Clientes</button>
            </a>
            <div class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
    
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        
    
    </header>
  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center" style="margin-top: 20px;">
                    <img src="{{ asset('images/kat.webp') }}" alt="Logo" class="logo-img-small">
                    <h1>Clientes</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-end mb-3">
                    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Crear Cliente</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Correo Electrónico</th>
                            <th>Teléfono</th>
                            <th>Fecha Nacimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $clientes)
                        <tr>
                            <td>{{ $clientes->id }}</td>
                            <td>{{ $clientes->nombrec }}</td>
                            <td>{{ $clientes->apellidoc }}</td>
                            <td>{{ $clientes->edadc }}</td>
                            <td>{{ $clientes->correo_electronicoc }}</td>
                            <td>{{ $clientes->telefonoc }}</td>
                            <td>{{ $clientes->fecha_nacimientoc }}</td>
                            <td>
                                <div class="text-end mb-3">
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ $clientes->id }}')">Eliminar</button>
                                    <a href="{{ route('clientes.edit', $clientes->id)}}"  class="btn btn-success ">Editar Cliente</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(id) {
            if (confirm("¿Estás seguro de que quieres eliminar este empleado?")) {
                // Si el usuario confirma, elimina la fila de la tabla
                var fila = document.getElementById("fila" + id);
                fila.parentNode.removeChild(fila);
                // Aquí puedes agregar código adicional para enviar una solicitud al servidor y eliminar el empleado de la base de datos
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>