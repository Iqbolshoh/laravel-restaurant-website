<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Rayhon Restorani • Menyu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: '#C8A96E',
                        dark: '#1F1F1F',
                        cream: '#FDFBF7',
                        softgray: '#F5F3EF',
                    },
                    fontFamily: {
                        serif: ['"Playfair Display"', 'Georgia', 'serif'],
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        .mobile-menu {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-cream font-sans text-dark antialiased">

    <!-- Navigatsiya (/menu uchun faol holat) -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md shadow-sm border-b border-softgray/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-utensils text-3xl text-gold"></i>
                    <span class="text-2xl md:text-3xl font-serif font-bold tracking-wide text-dark">Rayhon</span>
                </div>

                <nav class="hidden md:flex items-center space-x-8 font-medium text-gray-700">
                    <a href="/index" class="hover:text-gold transition border-b-2 border-transparent pb-1">Bosh sahifa</a>
                    <a href="/menu" class="text-gold border-b-2 border-gold pb-1">Menyu</a>
                    <a href="/team" class="hover:text-gold transition border-b-2 border-transparent pb-1">Jamoa</a>
                    <a href="/contact" class="hover:text-gold transition border-b-2 border-transparent pb-1">Aloqa</a>
                </nav>

                <div class="hidden md:block">
                    <a href="/contact" class="bg-gold text-white px-6 py-2.5 rounded-full font-semibold hover:bg-amber-700 transition shadow-md hover:shadow-lg text-sm">
                        Stol band qilish
                    </a>
                </div>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-dark focus:outline-none text-2xl">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>

            <div id="mobile-menu" class="md:hidden hidden mobile-menu pb-4 pt-2 space-y-3 bg-white/95">
                <a href="/index" class="block py-2 px-3 rounded-lg hover:bg-softgray font-medium">Bosh sahifa</a>
                <a href="/menu" class="block py-2 px-3 rounded-lg bg-softgray font-medium text-gold">Menyu</a>
                <a href="/team" class="block py-2 px-3 rounded-lg hover:bg-softgray font-medium">Jamoa</a>
                <a href="/contact" class="block py-2 px-3 rounded-lg hover:bg-softgray font-medium">Aloqa</a>
                <a href="/contact" class="block w-full text-center bg-gold text-white py-3 rounded-full font-semibold mt-2">Stol band qilish</a>
            </div>
        </div>
    </header>

    <main>
        <div class="bg-white py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-16">
                    <h1 class="text-4xl md:text-6xl font-serif font-bold text-dark">Bizning <span class="text-gold">Menyu</span></h1>
                    <p class="text-gray-500 mt-4 max-w-xl mx-auto">Har bir taom sevgi bilan tayyorlanadi. Milliy va Yevropa taomlari.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Milliy taomlar -->
                    <div>
                        <h2 class="text-3xl font-serif font-bold mb-8 border-b-2 border-gold pb-3 inline-block">Milliy taomlar</h2>
                        <div class="space-y-8">
                            <div class="flex justify-between items-start border-b border-dashed border-gray-200 pb-5">
                                <div>
                                    <h3 class="font-semibold text-lg">To'y Oshi</h3>
                                    <p class="text-sm text-gray-500">Yog'li qo'zi go'shti, sabzi, guruch</p>
                                </div>
                                <span class="text-gold font-bold text-lg ml-4">45,000 so'm</span>
                            </div>
                            <div class="flex justify-between items-start border-b border-dashed border-gray-200 pb-5">
                                <div>
                                    <h3 class="font-semibold text-lg">Manti (5 dona)</h3>
                                    <p class="text-sm text-gray-500">Bug'da pishirilgan, qaymoq bilan</p>
                                </div>
                                <span class="text-gold font-bold text-lg">38,000 so'm</span>
                            </div>
                            <div class="flex justify-between items-start border-b border-dashed border-gray-200 pb-5">
                                <div>
                                    <h3 class="font-semibold text-lg">Norin</h3>
                                    <p class="text-sm text-gray-500">Ot go'shti, ugra, qatiq</p>
                                </div>
                                <span class="text-gold font-bold text-lg">42,000 so'm</span>
                            </div>
                            <div class="flex justify-between items-start border-b border-dashed border-gray-200 pb-5">
                                <div>
                                    <h3 class="font-semibold text-lg">Sho'rva</h3>
                                    <p class="text-sm text-gray-500">Sabzavotli, mol go'shti</p>
                                </div>
                                <span class="text-gold font-bold text-lg">28,000 so'm</span>
                            </div>
                            <div class="flex justify-between items-start border-b border-dashed border-gray-200 pb-5">
                                <div>
                                    <h3 class="font-semibold text-lg">Lag'mon</h3>
                                    <p class="text-sm text-gray-500">Qo'lda tortilgan, qo'y go'shti</p>
                                </div>
                                <span class="text-gold font-bold text-lg">35,000 so'm</span>
                            </div>
                        </div>
                    </div>

                    <!-- Yevropa taomlari -->
                    <div>
                        <h2 class="text-3xl font-serif font-bold mb-8 border-b-2 border-gold pb-3 inline-block">Yevropa oshxonasi</h2>
                        <div class="space-y-8">
                            <div class="flex justify-between items-start border-b border-dashed border-gray-200 pb-5">
                                <div>
                                    <h3 class="font-semibold text-lg">Grilangan losos</h3>
                                    <p class="text-sm text-gray-500">Limonli sous, sabzavotlar</p>
                                </div>
                                <span class="text-gold font-bold text-lg">65,000 so'm</span>
                            </div>
                            <div class="flex justify-between items-start border-b border-dashed border-gray-200 pb-5">
                                <div>
                                    <h3 class="font-semibold text-lg">Pasta Karbonara</h3>
                                    <p class="text-sm text-gray-500">Bekon, qaymoqli sous</p>
                                </div>
                                <span class="text-gold font-bold text-lg">48,000 so'm</span>
                            </div>
                            <div class="flex justify-between items-start border-b border-dashed border-gray-200 pb-5">
                                <div>
                                    <h3 class="font-semibold text-lg">Sezar salati</h3>
                                    <p class="text-sm text-gray-500">Tovuq filesi, parmezan</p>
                                </div>
                                <span class="text-gold font-bold text-lg">35,000 so'm</span>
                            </div>
                            <div class="flex justify-between items-start border-b border-dashed border-gray-200 pb-5">
                                <div>
                                    <h3 class="font-semibold text-lg">Mol go'shti steyki</h3>
                                    <p class="text-sm text-gray-500">Qalampir sousi, fri kartoshkasi</p>
                                </div>
                                <span class="text-gold font-bold text-lg">72,000 so'm</span>
                            </div>
                            <div class="flex justify-between items-start border-b border-dashed border-gray-200 pb-5">
                                <div>
                                    <h3 class="font-semibold text-lg">Pizza Margarita</h3>
                                    <p class="text-sm text-gray-500">Motsarella, rayhon, pomidor</p>
                                </div>
                                <span class="text-gold font-bold text-lg">55,000 so'm</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ichimliklar -->
                <div class="mt-20">
                    <h2 class="text-3xl font-serif font-bold mb-8 text-center">Ichimliklar</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-softgray p-5 rounded-xl text-center">
                            <i class="fas fa-coffee text-3xl text-gold mb-3"></i>
                            <h4 class="font-semibold">Espresso</h4>
                            <span class="text-gold font-bold">15,000 so'm</span>
                        </div>
                        <div class="bg-softgray p-5 rounded-xl text-center">
                            <i class="fas fa-mug-hot text-3xl text-gold mb-3"></i>
                            <h4 class="font-semibold">Choy (ko'k/qora)</h4>
                            <span class="text-gold font-bold">10,000 so'm</span>
                        </div>
                        <div class="bg-softgray p-5 rounded-xl text-center">
                            <i class="fas fa-glass-whiskey text-3xl text-gold mb-3"></i>
                            <h4 class="font-semibold">Limonad</h4>
                            <span class="text-gold font-bold">18,000 so'm</span>
                        </div>
                        <div class="bg-softgray p-5 rounded-xl text-center">
                            <i class="fas fa-wine-bottle text-3xl text-gold mb-3"></i>
                            <h4 class="font-semibold">Vino (qizil/oq)</h4>
                            <span class="text-gold font-bold">55,000 so'm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 text-center md:text-left">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-white font-serif text-2xl font-bold mb-4">Rayhon</h3>
                    <p class="text-sm">2010 yildan beri yuqori darajadagi xizmat va unutilmas ta'm.</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Sahifalar</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/index" class="hover:text-gold transition">Bosh sahifa</a></li>
                        <li><a href="/menu" class="text-gold">Menyu</a></li>
                        <li><a href="/team" class="hover:text-gold transition">Jamoa</a></li>
                        <li><a href="/contact" class="hover:text-gold transition">Aloqa</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Ish vaqti</h4>
                    <p class="text-sm">Har kuni 10:00 – 23:00</p>
                    <p class="text-sm mt-2">+998 71 200 10 10</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-10 pt-6 text-sm text-center">
                &copy; 2026 Rayhon Restorani. Barcha huquqlar himoyalangan.
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>