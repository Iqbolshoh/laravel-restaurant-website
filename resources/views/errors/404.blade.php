<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Sahifa topilmadi | Restoran Website</title>
    <!-- Vite -->
    @if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-cream font-sans antialiased">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="text-center max-w-2xl mx-auto">
            <div class="text-8xl md:text-9xl font-serif font-bold text-gold mb-6">404</div>
            <h1 class="text-3xl md:text-4xl font-serif font-bold text-dark mb-4">Sahifa topilmadi</h1>
            <p class="text-gray-600 text-lg mb-8">Kechirasiz, siz qidirayotgan sahifa mavjud emas.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/" class="bg-gold hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full text-lg transition">
                    Bosh sahifaga qaytish
                </a>
            </div>
        </div>
    </div>
</body>

</html>