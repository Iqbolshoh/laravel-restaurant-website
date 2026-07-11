@extends('layouts.app')

@section('title', 'Menu | Restoran Website')

@section('content')
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
                            <p class="text-sm text-gray-500">Motsarella, Restoran Website, pomidor</p>
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
@endsection