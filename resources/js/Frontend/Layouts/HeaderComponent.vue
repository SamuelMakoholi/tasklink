<script setup>
import { Link, Head } from '@inertiajs/vue3';
import { ref } from 'vue';

// Define props
defineProps({
    canLogin: {
        type: Boolean,
        required: true,
    },
    canRegister: {
        type: Boolean,
        required: true,
    },
});

// Reactive state for mobile menu
const mobileMenuOpen = ref(false);

// Toggle function for mobile menu
const toggleMobileMenu = () => {
    mobileMenuOpen.value = !mobileMenuOpen.value;
};
</script>

<template>
    <Head title="TaskLink" />
    <div class="header bg-white p-4 flex items-center justify-between max-w-screen-lg mx-auto">
        <!-- Logo -->
        <div class="logo text-2xl font-bold text-blue-600">
           <a href="/">  TaskLink</a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-6">
            <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">Browse Services</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">Providers</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">Contact Us</a>
        </nav>

        <!-- Desktop Login and Register -->
        <div class="hidden md:flex space-x-4">
            <!-- Show Dashboard if Authenticated -->
            <template v-if="$page.props.auth.user">
                <Link
                    :href="route('dashboard')"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Dashboard
                </Link>
            </template>
            <!-- Show Login and Register if Not Authenticated -->
            <template v-else>
                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
                >
                    Register
                </Link>
                <Link
                    v-if="canLogin"
                    :href="route('login')"
                    class="px-4 py-2 border border-blue-600 text-blue-600 rounded hover:bg-blue-600 hover:text-white"
                >
                    Login
                </Link>
            </template>
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="md:hidden flex items-center text-gray-700" @click="toggleMobileMenu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 6h16.5m-16.5 6h16.5" />
            </svg>
        </button>

        <!-- Mobile Dropdown Menu -->
        <div v-if="mobileMenuOpen" class="absolute top-16 left-0 w-full bg-white p-4 md:hidden">
            <a href="#" class="block text-gray-700 hover:text-blue-600 mb-4">Home</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 mb-4">Browse Services</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 mb-4">Providers</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 mb-4">Contact Us</a>
            <!-- Mobile Login and Register -->
            <template v-if="$page.props.auth.user">
                <Link
                    :href="route('dashboard')"
                    class="block w-full px-4 py-2 text-black text-center bg-blue-600 rounded mb-2 hover:bg-gray-200"
                >
                    Dashboard
                </Link>
            </template>
            <template v-else>
                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="block w-full px-4 py-2 bg-blue-600 text-white rounded mb-2 hover:bg-blue-700"
                >
                    Register
                </Link>
                <Link
                    v-if="canLogin"
                    :href="route('login')"
                    class="block w-full px-4 py-2 border border-blue-600 text-blue-600 rounded hover:bg-blue-600 hover:text-white"
                >
                    Login
                </Link>
            </template>
        </div>
    </div>
</template>
