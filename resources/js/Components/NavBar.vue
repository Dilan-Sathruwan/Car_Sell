<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Menu, X, User, LogIn } from 'lucide-vue-next';
import { ref } from 'vue';

const isMobileMenuOpen = ref(false);

const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
};
</script>

<template>
    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo & Desktop Nav -->
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <Link :href="route('home')" class="text-2xl font-bold text-blue-600 tracking-tighter hover:opacity-80 transition">
                            Auto<span class="text-gray-900">Market</span>
                        </Link>
                    </div>
                    <div class="hidden sm:-my-px sm:ml-10 sm:flex sm:space-x-8">
                        <Link :href="route('home')" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 transition duration-150 ease-in-out">
                            Buy
                        </Link>
                        <Link :href="route('home')" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 transition duration-150 ease-in-out">
                            Sell
                        </Link>
                        <Link :href="route('home')" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 transition duration-150 ease-in-out">
                            Reviews
                        </Link>
                    </div>
                </div>

                <!-- Right Side Actions -->
                <div class="hidden sm:flex sm:items-center sm:ml-6 gap-4">
                    <Link :href="route('login')" class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-700 hover:text-blue-600 transition">
                        <LogIn class="w-4 h-4 mr-2" />
                        Log in
                    </Link>
                    <Link :href="route('register')" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                        Join
                    </Link>
                </div>

                <!-- Mobile Menu Button -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="toggleMobileMenu" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition origin-center">
                        <Menu v-if="!isMobileMenuOpen" class="w-6 h-6" />
                        <X v-else class="w-6 h-6" />
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div v-show="isMobileMenuOpen" class="sm:hidden border-t border-gray-200">
            <div class="pt-2 pb-3 space-y-1">
                <Link :href="route('home')" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 transition">Buy</Link>
                <Link :href="route('home')" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 transition">Sell</Link>
                <Link :href="route('home')" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 transition">Reviews</Link>
            </div>
            <div class="pt-4 pb-4 border-t border-gray-200">
                <div class="space-y-1">
                    <Link :href="route('login')" class="block pl-3 pr-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-50 transition">Log in</Link>
                    <Link :href="route('register')" class="block pl-3 pr-4 py-2 text-base font-medium text-blue-600 hover:text-blue-800 hover:bg-blue-50 transition">Join Now</Link>
                </div>
            </div>
        </div>
    </nav>
</template>
