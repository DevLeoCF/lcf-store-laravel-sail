<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Catálogo de Produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CDN ou build próprio -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="bg-gray-100 text-gray-800">

    <header class="bg-white shadow p-4 mb-6">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-xl font-bold">LCF - Store</h1>
        </div>
    </header>
    
    <main>

        @if(session('success'))
            <div
                x-data="{ show: true }"
                x-init="setTimeout(() => show = false, 3000)"
                x-show="show"
                x-transition
                class="fixed top-5 right-5 bg-green-500 text-white px-6 py-3 rounded shadow-lg z-50"
            >
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div
                x-data="{ show: true }"
                x-init="setTimeout(() => show = false, 3000)"
                x-show="show"
                x-transition
                class="fixed top-5 right-5 bg-red-500 text-white px-6 py-3 rounded shadow-lg z-50"
            >
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>

</body>

</html>
