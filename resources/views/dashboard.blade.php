<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Vinos</title>
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
        canvas {
            max-width: 100%; /* Ajusta el ancho del canvas */
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h2 class="font-semibold text-xl text-center">Dashboard</h2>
        <div class="card overflow-hidden shadow-sm sm:rounded-lg mt-4">
            <div class="card-body text-gray-900">
                <h3 class="text-lg font-semibold mt-4">Bienvenido, {{ Auth::user()->name }}!</h3> <!-- Muestra el nombre del usuario -->

                <!-- Barra de Navegación -->
                <nav class="mb-4">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a href="/productos" class="nav-link text-black">Productos</a>
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
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="#" class="nav-link text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a> <!-- Botón de cerrar sesión -->
                        </li>
                    </ul>
                </nav>

                <h3 class="text-lg font-semibold mt-4">Ventas de Productos</h3>
                <canvas id="barChart" class="mt-4"></canvas> <!-- Canvas para el gráfico -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Datos del gráfico
        const ctx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Vino Tinto', 'Vino Blanco'], // Etiquetas de los productos
                datasets: [{
                    label: 'Ventas ($)',
                    data: [2000, 2500], // Datos de ventas
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Gráfico de Ventas por Producto'
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
