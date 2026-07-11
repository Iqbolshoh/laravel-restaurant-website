<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Rayhon Restorani • Aloqa</title>
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
                    <a href="/team" class="hover:text-gold transition border-b-2 border-transparent pb-1">Jamoa</a>
                    <a href="/contact" class="text-gold border-b-2 border-gold pb-1">Aloqa</a>
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
                <a href="/team" class="block py-2 px-3 rounded-lg hover:bg-softgray font-medium">Jamoa</a>
                <a href="/contact" class="block py-2 px-3 rounded-lg bg-softgray font-medium text-gold">Aloqa</a>
                <a href="/contact" class="block w-full text-center bg-gold text-white py-3 rounded-full font-semibold mt-2">Stol band qilish</a>
            </div>
        </div>
    </header>

    <main>
        <div class="bg-white py-16 md:py-24">
            <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <!-- Aloqa formasi -->
                <div>
                    <h1 class="text-4xl md:text-5xl font-serif font-bold text-dark mb-6">Biz bilan <span class="text-gold">bog'laning</span></h1>
                    <p class="text-gray-600 mb-10">Stol band qilish, tadbirlar yoki savollar uchun xabar qoldiring.</p>

                    <form class="space-y-6" onsubmit="event.preventDefault(); alert('Xabaringiz qabul qilindi! Tez orada bog\'lanamiz.');">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Ismingiz</label>
                            <input type="text" placeholder="Ism va familiya" class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Telefon raqam</label>
                            <input type="tel" placeholder="+998 XX XXX XX XX" class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Xabar matni</label>
                            <textarea rows="4" placeholder="Xabaringizni yozing..." class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-gold focus:border-transparent"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gold text-white font-semibold py-4 rounded-xl hover:bg-amber-700 transition shadow-lg text-lg">
                            Jo'natish <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>

                <!-- Manzil va aloqa ma'lumotlari -->
                <div class="bg-softgray p-8 rounded-2xl shadow-sm">
                    <h2 class="text-2xl font-serif font-bold mb-6">Manzil va aloqa</h2>
                    <div class="space-y-6 text-gray-700">
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-map-marker-alt text-gold text-xl mt-1"></i>
                            <div>
                                <p class="font-semibold">Manzil</p>
                                <p>Toshkent sh., Amir Temur ko'chasi, 55-uy</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-phone-alt text-gold text-xl mt-1"></i>
                            <div>
                                <p class="font-semibold">Telefon</p>
                                <p>+998 71 200 10 10</p>
                                <p>+998 90 123 45 67</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-clock text-gold text-xl mt-1"></i>
                            <div>
                                <p class="font-semibold">Ish vaqti</p>
                                <p>Dushanba - Yakshanba: 10:00 – 23:00</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <i class="fas fa-envelope text-gold text-xl mt-1"></i>
                            <div>
                                <p class="font-semibold">Email</p>
                                <p>info@rayhonrestaurant.uz</p>
                            </div>
                        </div>
                    </div>
                    <!-- Xarita rasmi -->
                    <div class="mt-8 rounded-xl overflow-hidden h-48 bg-gray-300 relative flex items-center justify-center">
                        <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=2074&auto=format&fit=crop" alt="Xarita" class="w-full h-full object-cover opacity-70">
                        <span class="absolute text-dark font-semibold bg-white/80 px-4 py-2 rounded-full">📍 Amir Temur ko'chasi</span>
                    </div>
                    <!-- Ijtimoiy tarmoqlar -->
                    <div class="flex space-x-4 mt-6 text-2xl">
                        <a href="#" class="text-gold hover:text-amber-700"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gold hover:text-amber-700"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gold hover:text-amber-700"><i class="fab fa-telegram"></i></a>
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
                        <li><a href="/team" class="hover:text-gold transition">Jamoa</a></li>
                        <li><a href="/contact" class="text-gold">Aloqa</a></li>
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