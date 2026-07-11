<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Rayhon Restorani • Jamoa</title>
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

        .team-card:hover img {
            transform: scale(1.05);
        }

        .team-card img {
            transition: transform 0.4s ease;
        }
    </style>
</head>

<body class="bg-cream font-sans text-dark antialiased">

    <!-- Navigatsiya -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md shadow-sm border-b border-softgray/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-utensils text-3xl text-gold"></i>
                    <span class="text-2xl md:text-3xl font-serif font-bold tracking-wide text-dark">Rayhon</span>
                </div>

                <nav class="hidden md:flex items-center space-x-8 font-medium text-gray-700">
                    <a href="/index" class="hover:text-gold transition border-b-2 border-transparent pb-1">Bosh sahifa</a>
                    <a href="/menu" class="hover:text-gold transition border-b-2 border-transparent pb-1">Menyu</a>
                    <a href="/team" class="text-gold border-b-2 border-gold pb-1">Jamoa</a>
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
                <a href="/menu" class="block py-2 px-3 rounded-lg hover:bg-softgray font-medium">Menyu</a>
                <a href="/team" class="block py-2 px-3 rounded-lg bg-softgray font-medium text-gold">Jamoa</a>
                <a href="/contact" class="block py-2 px-3 rounded-lg hover:bg-softgray font-medium">Aloqa</a>
                <a href="/contact" class="block w-full text-center bg-gold text-white py-3 rounded-full font-semibold mt-2">Stol band qilish</a>
            </div>
        </div>
    </header>

    <main>
        <div class="bg-white py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-6xl font-serif font-bold text-dark mb-6">Bizning <span class="text-gold">jamoamiz</span></h1>
                <p class="text-gray-500 max-w-2xl mx-auto mb-16">Har biri o'z sohasining ustasi. Ta'm va xizmatdagi mukammallik siri.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
                    <!-- A'zo 1 -->
                    <div class="team-card group">
                        <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden mb-5 border-4 border-gold/30 group-hover:border-gold transition">
                            <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=1887&auto=format&fit=crop" alt="Chef" class="w-full h-full object-cover">
                        </div>
                        <h3 class="font-serif font-bold text-xl">Alisher Karimov</h3>
                        <p class="text-gold font-medium">Bosh oshpaz</p>
                        <p class="text-sm text-gray-500 mt-2">15 yillik tajriba, Yevropa oshxonalarida malaka oshirgan.</p>
                    </div>
                    <!-- A'zo 2 -->
                    <div class="team-card group">
                        <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden mb-5 border-4 border-gold/30 group-hover:border-gold transition">
                            <img src="https://images.unsplash.com/photo-1583394293214-28ded15ee548?q=80&w=1880&auto=format&fit=crop" alt="Sous chef" class="w-full h-full object-cover">
                        </div>
                        <h3 class="font-serif font-bold text-xl">Dilnoza Yusupova</h3>
                        <p class="text-gold font-medium">Sous-oshpaz</p>
                        <p class="text-sm text-gray-500 mt-2">Milliy taomlar bo'yicha mutaxassis.</p>
                    </div>
                    <!-- A'zo 3 -->
                    <div class="team-card group">
                        <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden mb-5 border-4 border-gold/30 group-hover:border-gold transition">
                            <img src="https://images.unsplash.com/photo-1542189040-2c6e2c8b8b7b?q=80&w=1887&auto=format&fit=crop" alt="Manager" class="w-full h-full object-cover">
                        </div>
                        <h3 class="font-serif font-bold text-xl">Jasur Rahimov</h3>
                        <p class="text-gold font-medium">Restoran menejeri</p>
                        <p class="text-sm text-gray-500 mt-2">Mehmonlarga yuqori darajadagi xizmat uchun mas'ul.</p>
                    </div>
                    <!-- A'zo 4 -->
                    <div class="team-card group">
                        <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden mb-5 border-4 border-gold/30 group-hover:border-gold transition">
                            <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=1887&auto=format&fit=crop" alt="Pastry" class="w-full h-full object-cover">
                        </div>
                        <h3 class="font-serif font-bold text-xl">Madina Sobirova</h3>
                        <p class="text-gold font-medium">Qandolatchi</p>
                        <p class="text-sm text-gray-500 mt-2">Fransuz desertlari va milliy shirinliklar.</p>
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
                        <li><a href="/menu" class="hover:text-gold transition">Menyu</a></li>
                        <li><a href="/team" class="text-gold">Jamoa</a></li>
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