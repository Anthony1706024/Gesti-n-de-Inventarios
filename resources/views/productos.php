<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Vinos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-image: url('{{ asset('img/vino.jpg') }}'); /* Cambia 'vino.jpg' por el nombre de tu imagen */
            background-size: cover;
            background-position: center;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h2 class="font-semibold text-xl text-center">Productos</h2>
        <div class="card overflow-hidden shadow-sm sm:rounded-lg mt-4">
            <div class="card-body text-gray-900">
                <h3 class="text-lg font-semibold mt-4">Lista de Productos</h3>

                <!-- Barra de Navegación -->
                <nav class="mb-4">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link text-black">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="/insumos" class="nav-link text-black">Insumos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/pedidos" class="nav-link text-black">Pedidos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/predicciones" class="nav-link text-black">Predicciones</a>
                        </li>
                    </ul>
                </nav>

                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre del Producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Vino Tinto</td>
                            <td>$20.00</td>
                            <td>
                                <a href="#" class="text-primary">Editar</a>
                                <a href="#" class="text-danger ml-4">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Vino Blanco</td>
                            <td>$25.00</td>
                            <td>
                                <a href="#" class="text-primary">Editar</a>
                                <a href="#" class="text-danger ml-4">Eliminar</a>
                            </td>
                        </tr>
                        <!-- Puedes agregar más productos aquí -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
