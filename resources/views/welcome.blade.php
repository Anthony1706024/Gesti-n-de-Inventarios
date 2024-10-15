<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Vinos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('{{ asset('img/vino.jpg') }}'); /* Cambia 'vinos.jpg' por el nombre de tu imagen */
            background-size: cover;
            background-position: center;
            color: white; /* Color de texto por defecto */
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex flex-col">
        <header class="flex justify-end p-6">
            <nav class="-mx-3 flex flex-1 justify-end">
                <a href="/login" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Iniciar Sesión
                </a>
                <a href="/register" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white ml-4">
                    Registrarse
                </a>
            </nav>
        </header>
        
       
      
    </div>
</body>
</html>
