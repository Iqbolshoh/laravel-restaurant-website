@extends('layouts.app')

@section('title', 'Aloqa | Restoran Website')

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
                    <input type="text" placeholder="Ism va familiya" class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:outline-hidden focus:ring-2 focus:ring-gold focus:border-transparent transition">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Telefon raqam</label>
                    <input type="tel" placeholder="+998 XX XXX XX XX" class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:outline-hidden focus:ring-2 focus:ring-gold focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Xabar matni</label>
                    <textarea rows="4" placeholder="Xabaringizni yozing..." class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:outline-hidden focus:ring-2 focus:ring-gold focus:border-transparent"></textarea>
                </div>
                <button type="submit" class="w-full bg-gold text-white font-semibold py-4 rounded-xl hover:bg-amber-700 transition shadow-lg text-lg">
                    Jo'natish <i class="fas fa-paper-plane ml-2"></i>
                </button>
            </form>
        </div>

        <!-- Manzil va aloqa ma'lumotlari -->
        <div class="bg-softgray p-8 rounded-2xl shadow-xs">
            <h2 class="text-2xl font-serif font-bold mb-6">Manzil va aloqa</h2>
            <div class="space-y-6 text-gray-700">
                <div class="flex items-start gap-4">
                    <i class="fas fa-map-marker-alt text-gold text-xl mt-1"></i>
                    <div>
                        <p class="font-semibold">Manzil</p>
                        <p>Toshkent sh., Amir Temur ko'chasi, 55-uy</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <i class="fas fa-phone-alt text-gold text-xl mt-1"></i>
                    <div>
                        <p class="font-semibold">Telefon</p>
                        <p>+998 71 200 10 10</p>
                        <p>+998 90 123 45 67</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <i class="fas fa-clock text-gold text-xl mt-1"></i>
                    <div>
                        <p class="font-semibold">Ish vaqti</p>
                        <p>Dushanba - Yakshanba: 10:00 – 23:00</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <i class="fas fa-envelope text-gold text-xl mt-1"></i>
                    <div>
                        <p class="font-semibold">Email</p>
                        <p>info@restoranwebsite.uz</p>
                    </div>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="mt-8 rounded-xl overflow-hidden h-64 shadow-md">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.559982064123!2d69.2797373154254!3d41.311156979271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b0cc3c3e3e3%3A0x9b0b0b0b0b0b0b0b!2sAmir%20Temur%20Square!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Restoran joylashuvi">
                </iframe>
            </div>

            <!-- Ijtimoiy tarmoqlar -->
            <div class="flex gap-4 mt-6 text-2xl">
                <a href="#" class="text-gold hover:text-amber-700 transition" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-gold hover:text-amber-700 transition" aria-label="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="text-gold hover:text-amber-700 transition" aria-label="Telegram">
                    <i class="fab fa-telegram"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection