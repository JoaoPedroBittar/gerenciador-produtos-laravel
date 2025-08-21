<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Produtos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen flex flex-col">
        <header class="bg-blue-600 text-white shadow-md">
            <div class="container mx-auto px-4 py-12">
                <div class="text-center">
                    <div class="mb-4">
                        <i class="fas fa-boxes text-4xl text-white"></i>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold mb-3">
                        Gerenciador de Produtos
                    </h1>
                    <p class="text-lg md:text-xl text-blue-100">
                        Gerencie seu inventário de forma simples e eficiente
                    </p>
                </div>
            </div>
        </header>

        <main class="flex-1 py-8">
            <div class="container mx-auto px-4">
                @yield('content')
            </div>
        </main>

        <footer class="bg-white border-t border-gray-200 py-6">
            <div class="container mx-auto px-4 text-center">
                <p class="text-gray-600">
                    &copy; 2025 Sistema de Gerenciamento de Produtos
                </p>
            </div>
        </footer>

        @if(session('success'))
            <div class="fixed bottom-6 right-6 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('success') }}
                </div>
            </div>
        @endif
    </div>

    <script>
        setTimeout(() => {
            const successMessage = document.querySelector('.fixed');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 5000);
    </script>
</body>
</html>