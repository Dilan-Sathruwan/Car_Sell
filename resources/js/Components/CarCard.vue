<script setup lang="ts">
import { Heart, Gauge, Calendar, Fuel } from 'lucide-vue-next';

defineProps<{
    image?: string;
    title?: string;
    price?: string;
    miles?: string;
    year?: string;
    type?: string;
}>();
</script>

<template>
    <div class="group relative bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100 overflow-hidden">
        <!-- Image -->
        <div class="aspect-[4/3] w-full overflow-hidden bg-gray-200 relative">
            <img 
                :src="image || 'https://images.unsplash.com/photo-1542282088-fe8426682b8f?q=80&w=1000&auto=format&fit=crop'" 
                alt="Car" 
                class="h-full w-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
            />
            <button class="absolute top-3 right-3 p-2 rounded-full bg-white/80 hover:bg-white text-gray-600 hover:text-red-500 transition backdrop-blur-sm">
                <Heart class="w-5 h-5" />
            </button>
            <div class="absolute bottom-3 left-3 bg-black/60 text-white text-xs px-2 py-1 rounded backdrop-blur-sm">
                Plus
            </div>
        </div>

        <!-- Content -->
        <div class="p-4">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-lg font-bold text-gray-900 line-clamp-1">{{ title || 'Silver Mercedes-Benz C Class' }}</h3>
            </div>
            <p class="text-xl font-bold text-blue-600 mb-4">{{ price || '£32,950' }}</p>

            <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                <div class="flex items-center gap-1">
                    <Calendar class="w-4 h-4" />
                    <span>{{ year || '2023' }}</span>
                </div>
                <div class="flex items-center gap-1">
                    <Gauge class="w-4 h-4" />
                    <span>{{ miles || '12k' }} miles</span>
                </div>
                <div class="flex items-center gap-1">
                    <Fuel class="w-4 h-4" />
                    <span>{{ type || 'Petrol' }}</span>
                </div>
            </div>

            <div class="pt-4 border-t border-gray-100">
                <button class="w-full py-2.5 rounded-lg border border-blue-600 text-blue-600 font-semibold hover:bg-blue-50 transition text-sm">
                    View Details
                </button>
            </div>
        </div>
    </div>
</template>
