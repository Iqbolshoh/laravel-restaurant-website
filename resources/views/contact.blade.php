@extends('layouts.app')

@section('title', 'Bosh sahifa | Restoran Website')

@section('content')
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
@endsection