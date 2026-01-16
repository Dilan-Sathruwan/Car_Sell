<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import NavBar from '@/Components/NavBar.vue';
import Footer from '@/Components/Footer.vue';
import SearchBox from '@/Components/SearchBox.vue';
import CarCard from '@/Components/CarCard.vue';
import { ArrowRight, Star, Shield, Zap } from 'lucide-vue-next';

// Mock data for display
const featuredCars = [
    { title: 'BMW 3 Series 330e M Sport', price: '£28,950', miles: '21k', year: '2022', type: 'Hybrid', image: 'https://images.unsplash.com/photo-1555215695-3004980adade?auto=format&fit=crop&q=80&w=1000' },
    { title: 'Audi A3 S Line', price: '£22,450', miles: '15k', year: '2023', type: 'Petrol', image: 'https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?auto=format&fit=crop&q=80&w=1000' },
    { title: 'Tesla Model 3 Long Range', price: '£31,000', miles: '8k', year: '2023', type: 'Electric', image: 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?auto=format&fit=crop&q=80&w=1000' },
    { title: 'Mercedes-Benz A Class', price: '£19,995', miles: '35k', year: '2020', type: 'Diesel', image: 'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&q=80&w=1000' },
];

const brands = ['BMW', 'Audi', 'Mercedes', 'Ford', 'Toyota', 'Volkswagen', 'Tesla', 'Land Rover'];
</script>

<template>
    <Head title="Home | AutoMarket" />
    <div class="bg-gray-50 min-h-screen text-gray-900 font-sans">
        <NavBar />

        <!-- Hero Section -->
        <div class="relative bg-gray-900 overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover opacity-60" alt="Hero Background" />
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20 pb-24 md:pt-32 md:pb-32">
                <div class="text-center mb-10 md:mb-16">
                    <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight mb-4">
                        Find your perfect car today.
                    </h1>
                    <p class="text-xl text-gray-200 max-w-2xl mx-auto">
                        Search thousands of new and used cars from trusted dealers and private sellers.
                    </p>
                </div>
                
                <SearchBox />
            </div>
        </div>

        <!-- Featured Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-end mb-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-900">Latest Arrivals</h2>
                        <p class="text-gray-500 mt-2">Freshly added cars near you</p>
                    </div>
                    <Link :href="route('home')" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center gap-1 group">
                        View all <ArrowRight class="w-4 h-4 group-hover:translate-x-1 transition" />
                    </Link>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <CarCard 
                        v-for="(car, index) in featuredCars" 
                        :key="index"
                        v-bind="car"
                    />
                </div>
            </div>
        </section>

        <!-- Browse by Brand -->
        <section class="py-16 bg-gray-50 border-t border-gray-200">
             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                 <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Browse by Brand</h2>
                 <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-4">
                     <div 
                        v-for="brand in brands" 
                        :key="brand" 
                        class="bg-white p-4 rounded-xl shadow-sm hover:shadow-md hover:border-blue-500 hover:text-blue-600 transition cursor-pointer border border-transparent flex items-center justify-center font-semibold text-gray-700"
                     >
                        {{ brand }}
                     </div>
                 </div>
             </div>
        </section>

        <!-- Features / Trust -->
        <section class="py-20 bg-white">
             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <Shield class="w-8 h-8" />
                        </div>
                        <h3 class="text-xl font-bold mb-3">Trusted & Secure</h3>
                        <p class="text-gray-500">We verify all dealers and provide secure payment options for peace of mind.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <Zap class="w-8 h-8" />
                        </div>
                        <h3 class="text-xl font-bold mb-3">Instant Valuation</h3>
                        <p class="text-gray-500">Get a fair price for your car in minutes with our AI-powered valuation tool.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <Star class="w-8 h-8" />
                        </div>
                        <h3 class="text-xl font-bold mb-3">5-Star Rated</h3>
                        <p class="text-gray-500">Join millions of happy customers who found their dream car with us.</p>
                    </div>
                </div>
             </div>
        </section>

        <!-- Selling CTA -->
        <section class="py-20 bg-blue-600 relative overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
             <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
                 <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Ready to sell your car?</h2>
                 <p class="text-blue-100 text-xl mb-8">Get the best price from our network of verified dealers. No hidden fees.</p>
                 <div class="flex flex-col sm:flex-row gap-4 justify-center">
                     <button class="px-8 py-4 bg-white text-blue-600 rounded-full font-bold hover:bg-gray-100 transition shadow-lg">
                         Value My Car
                     </button>
                     <button class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-bold hover:bg-white/10 transition">
                         Create Listing
                     </button>
                 </div>
             </div>
        </section>

        <Footer />
    </div>
</template>
