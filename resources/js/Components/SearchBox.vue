<script setup lang="ts">
import { ref } from 'vue';
import { Search } from 'lucide-vue-next';

const activeTab = ref('buy');

const switchTab = (tab: string) => {
    activeTab.value = tab;
};
</script>

<template>
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden max-w-4xl w-full mx-auto relative z-10">
        <!-- Tabs -->
        <div class="flex border-b border-gray-100">
            <button 
                @click="switchTab('buy')"
                class="flex-1 py-4 text-center font-semibold text-sm sm:text-base transition-colors relative"
                :class="activeTab === 'buy' ? 'text-blue-600 bg-white' : 'text-gray-500 bg-gray-50 hover:bg-gray-100'"
            >
                Buy a Car
                <div v-if="activeTab === 'buy'" class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600"></div>
            </button>
            <button 
                @click="switchTab('sell')"
                class="flex-1 py-4 text-center font-semibold text-sm sm:text-base transition-colors relative"
                :class="activeTab === 'sell' ? 'text-blue-600 bg-white' : 'text-gray-500 bg-gray-50 hover:bg-gray-100'"
            >
                Sell your Car
                <div v-if="activeTab === 'sell'" class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600"></div>
            </button>
        </div>

        <!-- Content -->
        <div class="p-6 md:p-8">
            <template v-if="activeTab === 'buy'">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                    <div class="md:col-span-2 space-y-2">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Make & Model</label>
                        <select class="w-full h-12 rounded-lg border-gray-300 bg-gray-50 focus:border-blue-500 focus:ring-blue-500 text-gray-900 font-medium shadow-sm transition">
                            <option>Any Make</option>
                            <option>BMW</option>
                            <option>Audi</option>
                            <option>Mercedes</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                         <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Postcode</label>
                        <input type="text" placeholder="e.g. SW1A 1AA" class="w-full h-12 rounded-lg border-gray-300 bg-gray-50 focus:border-blue-500 focus:ring-blue-500 text-gray-900 font-medium shadow-sm transition" />
                    </div>
                     <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Distance</label>
                        <select class="w-full h-12 rounded-lg border-gray-300 bg-gray-50 focus:border-blue-500 focus:ring-blue-500 text-gray-900 font-medium shadow-sm transition">
                            <option>National</option>
                            <option>Within 10 miles</option>
                            <option>Within 50 miles</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                    <div class="space-y-2">
                         <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Min Price</label>
                         <select class="w-full h-12 rounded-lg border-gray-300 bg-gray-50 focus:border-blue-500 focus:ring-blue-500 text-gray-900 font-medium shadow-sm transition">
                            <option>Min Price</option>
                            <option>£1,000</option>
                            <option>£5,000</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                         <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Max Price</label>
                         <select class="w-full h-12 rounded-lg border-gray-300 bg-gray-50 focus:border-blue-500 focus:ring-blue-500 text-gray-900 font-medium shadow-sm transition">
                            <option>Max Price</option>
                            <option>£10,000</option>
                            <option>£20,000</option>
                        </select>
                    </div>
                     <div class="space-y-2 md:col-span-2">
                         <button class="w-full h-12 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-bold text-lg shadow-lg hover:shadow-blue-500/30 transition flex items-center justify-center gap-2 mt-auto pt-6">
                            <Search class="w-5 h-5" />
                            Search 43,921 Cars
                        </button>
                    </div>
                </div>
                 <div class="text-center">
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium">More search options</a>
                </div>
            </template>
            
            <template v-else>
                <div class="text-center py-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Value your car for free</h3>
                    <p class="text-gray-500 mb-6">Get an instant valuation based on live market data.</p>
                    <div class="flex max-w-lg mx-auto gap-3">
                         <input type="text" placeholder="Enter Registration" class="flex-1 h-14 rounded-lg border-2 border-yellow-400 bg-yellow-50 focus:border-yellow-500 focus:ring-yellow-500 text-gray-900 font-bold text-center text-xl shadow-sm uppercase placeholder:normal-case placeholder:font-normal placeholder:text-gray-400" />
                          <button class="h-14 px-8 bg-gray-900 hover:bg-gray-800 text-white rounded-lg font-bold text-lg shadow-lg transition">
                            Go
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>
</template>
