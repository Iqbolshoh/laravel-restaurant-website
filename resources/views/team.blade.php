@extends('layouts.app')

@section('title', 'Jamoa | Restoran Website')

@section('content')
<div class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-serif font-bold text-dark mb-6">Bizning <span class="text-gold">jamoamiz</span></h1>
        <p class="text-gray-500 max-w-2xl mx-auto mb-16">Har biri o'z sohasining ustasi. Ta'm va xizmatdagi mukammallik siri.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- A'zo 1 - Bosh oshpaz (Erkak) -->
            <div class="team-card group">
                <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden mb-5 border-4 border-gold/30 group-hover:border-gold transition">
                    <img src="https://images.unsplash.com/photo-1583394293214-28ded15ee548?w=200&h=200&fit=crop&auto=format" 
                         alt="Bosh oshpaz Alisher Karimov" 
                         class="w-full h-full object-cover"
                         loading="lazy"
                         width="200"
                         height="200">
                </div>
                <h3 class="font-serif font-bold text-xl">Alisher Karimov</h3>
                <p class="text-gold font-medium">Bosh oshpaz</p>
                <p class="text-sm text-gray-500 mt-2">15 yillik tajriba, Yevropa oshxonalarida malaka oshirgan.</p>
            </div>
            
            <!-- A'zo 2 - Sous-oshpaz (Ayol) -->
            <div class="team-card group">
                <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden mb-5 border-4 border-gold/30 group-hover:border-gold transition">
                    <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=200&h=200&fit=crop&auto=format" 
                         alt="Sous-oshpaz Dilnoza Yusupova" 
                         class="w-full h-full object-cover"
                         loading="lazy"
                         width="200"
                         height="200">
                </div>
                <h3 class="font-serif font-bold text-xl">Dilnoza Yusupova</h3>
                <p class="text-gold font-medium">Sous-oshpaz</p>
                <p class="text-sm text-gray-500 mt-2">Milliy taomlar bo'yicha mutaxassis, 8 yillik tajriba.</p>
            </div>
            
            <!-- A'zo 3 - Restoran menejeri (Erkak) -->
            <div class="team-card group">
                <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden mb-5 border-4 border-gold/30 group-hover:border-gold transition">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop&auto=format" 
                         alt="Restoran menejeri Jasur Rahimov" 
                         class="w-full h-full object-cover"
                         loading="lazy"
                         width="200"
                         height="200">
                </div>
                <h3 class="font-serif font-bold text-xl">Jasur Rahimov</h3>
                <p class="text-gold font-medium">Restoran menejeri</p>
                <p class="text-sm text-gray-500 mt-2">Mehmonlarga yuqori darajadagi xizmat uchun mas'ul.</p>
            </div>
            
            <!-- A'zo 4 - Qandolatchi (Ayol) -->
            <div class="team-card group">
                <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden mb-5 border-4 border-gold/30 group-hover:border-gold transition">
                    <img src="https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?w=200&h=200&fit=crop&auto=format" 
                         alt="Qandolatchi Madina Sobirova" 
                         class="w-full h-full object-cover"
                         loading="lazy"
                         width="200"
                         height="200">
                </div>
                <h3 class="font-serif font-bold text-xl">Madina Sobirova</h3>
                <p class="text-gold font-medium">Qandolatchi</p>
                <p class="text-sm text-gray-500 mt-2">Fransuz desertlari va milliy shirinliklar ustasi.</p>
            </div>
        </div>
    </div>
</div>
@endsection