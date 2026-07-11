<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Rayhon Restorani • Bosh sahifa</title>
    <!-- Tailwind CSS 4 CDN -->
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
                    },
                    backgroundImage: {
                        'hero-pattern': "url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=2070&auto=format&fit=crop')",
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-6px);
            box-shadow: 0 25px 30px -12px rgba(0, 0, 0, 0.15);
        }

        .mobile-menu {
            transition: all 0.3s ease;
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
                    <a href="/" class="text-gold border-b-2 border-gold pb-1">Bosh sahifa</a>
                    <a href="/menu" class="hover:text-gold transition border-b-2 border-transparent pb-1">Menyu</a>
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
                <a href="/" class="block py-2 px-3 rounded-lg bg-softgray font-medium text-gold">Bosh sahifa</a>
                <a href="/menu" class="block py-2 px-3 rounded-lg hover:bg-softgray font-medium">Menyu</a>
                <a href="/team" class="block py-2 px-3 rounded-lg hover:bg-softgray font-medium">Jamoa</a>
                <a href="/contact" class="block py-2 px-3 rounded-lg hover:bg-softgray font-medium">Aloqa</a>
                <a href="/contact" class="block w-full text-center bg-gold text-white py-3 rounded-full font-semibold mt-2">Stol band qilish</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero bo'limi -->
        <section class="relative bg-hero-pattern bg-cover bg-center bg-no-repeat h-[85vh] flex items-center justify-center text-white">
            <div class="absolute inset-0 bg-black/60 backdrop-brightness-50"></div>
            <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-serif font-bold mb-6 leading-tight">Haqiqiy ta'm sari <br> <span class="text-gold">sayohat</span></h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-2xl mx-auto">Rayhon restorani — 2010 yildan beri milliy taomlar va zamonaviy Yevropa oshxonasining uyg'unligi.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/menu" class="bg-gold hover:bg-amber-600 text-white font-semibold px-8 py-4 rounded-full text-lg transition shadow-xl">
                        Menyuni ko'rish
                    </a>
                    <a href="/contact" class="bg-transparent border-2 border-white hover:bg-white hover:text-dark text-white font-semibold px-8 py-4 rounded-full text-lg transition">
                        Bog'lanish
                    </a>
                </div>
            </div>
        </section>

        <!-- Nega biz? -->
        <section class="py-20 md:py-28 bg-white">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-dark mb-16">Nega aynan <span class="text-gold">Rayhon?</span></h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="p-8 rounded-2xl bg-softgray hover-lift">
                        <div class="text-gold text-4xl mb-5"><i class="fas fa-leaf"></i></div>
                        <h3 class="text-2xl font-serif font-semibold mb-3">Faqat tabiiy mahsulotlar</h3>
                        <p class="text-gray-600">Barcha taomlar mahalliy fermerlardan keltirilgan eng yangi sabzavot va go'shtlardan tayyorlanadi.</p>
                    </div>
                    <div class="p-8 rounded-2xl bg-softgray hover-lift">
                        <div class="text-gold text-4xl mb-5"><i class="fas fa-star"></i></div>
                        <h3 class="text-2xl font-serif font-semibold mb-3">Mohir oshpazlar</h3>
                        <p class="text-gray-600">Yevropa va Osiyo oshxonalarida tajribaga ega jamoamiz har bir taomga jon beradi.</p>
                    </div>
                    <div class="p-8 rounded-2xl bg-softgray hover-lift">
                        <div class="text-gold text-4xl mb-5"><i class="fas fa-wine-glass-alt"></i></div>
                        <h3 class="text-2xl font-serif font-semibold mb-3">Shinam muhit</h3>
                        <p class="text-gray-600">Oilaviy kechki ovqat yoki ish uchrashuvlari uchun maxsus dizayn qilingan zonalar.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mashhur taomlar -->
        <section class="py-20 bg-cream">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-5xl font-serif font-bold mb-6">Sevimli taomlar</h2>
                <p class="text-gray-600 max-w-2xl mx-auto mb-16">Mijozlarimiz eng ko'p buyurtma beradigan durdonalar</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover-lift">
                        <img src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?q=80&w=2070&auto=format&fit=crop" alt="Osh" class="h-56 w-full object-cover">
                        <div class="p-5">
                            <h4 class="font-serif font-bold text-xl">To'y Oshi</h4>
                            <p class="text-sm text-gray-500 mt-1">An'anaviy retsept</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover-lift">
                        <img src="https://images.unsplash.com/photo-1594212699903-ec8a3eca50f5?q=80&w=2071&auto=format&fit=crop" alt="Manti" class="h-56 w-full object-cover">
                        <div class="p-5">
                            <h4 class="font-serif font-bold text-xl">Manti</h4>
                            <p class="text-sm text-gray-500 mt-1">Qo'zi go'shti bilan</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover-lift">
                        <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?q=80&w=1887&auto=format&fit=crop" alt="Kabob" class="h-56 w-full object-cover">
                        <div class="p-5">
                            <h4 class="font-serif font-bold text-xl">Shashlik</h4>
                            <p class="text-sm text-gray-500 mt-1">Mol go'shti, maxsus marinad</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl overflow-hidden shadow-md hover-lift">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=1780&auto=format&fit=crop" alt="Salat" class="h-56 w-full object-cover">
                        <div class="p-5">
                            <h4 class="font-serif font-bold text-xl">Rayhon salati</h4>
                            <p class="text-sm text-gray-500 mt-1">Yangi ko'katlar bilan</p>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <a href="/menu" class="inline-block border-2 border-gold text-gold hover:bg-gold hover:text-white font-semibold px-8 py-3 rounded-full transition">
                        To'liq menyu <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>
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
                        <li><a href="/" class="text-gold">Bosh sahifa</a></li>
                        <li><a href="/menu" class="hover:text-gold transition">Menyu</a></li>
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