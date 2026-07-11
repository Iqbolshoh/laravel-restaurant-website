@extends('layouts.app')

@section('title', 'Jamoa | Restoran Website')

@section('content')
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
@endsection