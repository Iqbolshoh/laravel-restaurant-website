@extends('layouts.app')

@section('title', 'Bosh sahifa | Restoran Website')

@section('content')
<!-- Hero bo'limi -->
<section class="relative bg-hero-pattern bg-cover bg-center bg-no-repeat h-[85vh] flex items-center justify-center text-white">
    <div class="absolute inset-0 bg-black/60 backdrop-brightness-50"></div>
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-5xl md:text-7xl font-serif font-bold mb-6 leading-tight">Haqiqiy ta'm sari <br> <span class="text-gold">sayohat</span></h1>
        <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-2xl mx-auto">Restoran Website restorani — 2010 yildan beri milliy taomlar va zamonaviy Yevropa oshxonasining uyg'unligi.</p>
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

<h1>salom ishlar yaxshimi?</h1>

<!-- Nega biz? -->
<section class="py-20 md:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-5xl font-serif font-bold text-dark mb-16">Nega aynan <span class="text-gold">Restoran Website?</span></h2>
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
                    <h4 class="font-serif font-bold text-xl">Restoran Website salati</h4>
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
@endsection