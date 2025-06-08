<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Catálogo de Produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CDN ou build próprio -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <header class="bg-white shadow p-4 mb-6">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-xl font-bold">LCF - Store</h1>
        </div>
    </header>
    
    <main>
        @yield('content')
    </main>

</body>

</html>
