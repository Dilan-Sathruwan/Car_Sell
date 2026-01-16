<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                <!-- Branding -->
                <div class="col-span-2 md:col-span-1">
                    <Link :href="route('home')" class="text-2xl font-bold tracking-tighter text-white mb-4 block">
                        Auto<span class="text-blue-500">Market</span>
                    </Link>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        The world's most trusted marketplace for buying and selling cars. Find your dream car today.
                    </p>
                </div>
                
                <!-- Links -->
                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-200 uppercase mb-4">Buying</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Browse Cars</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Car Reviews</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Car Finance</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-200 uppercase mb-4">Selling</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Sell your car</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Car Cleanup</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Dealer Portal</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-200 uppercase mb-4">Company</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">
                    &copy; 2026 AutoMarket Inc. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-500 hover:text-white transition"><span class="sr-only">Facebook</span>FB</a>
                    <a href="#" class="text-gray-500 hover:text-white transition"><span class="sr-only">Twitter</span>TW</a>
                    <a href="#" class="text-gray-500 hover:text-white transition"><span class="sr-only">Instagram</span>IG</a>
                </div>
            </div>
        </div>
    </footer>
</template>
