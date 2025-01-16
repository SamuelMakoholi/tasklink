<template>
    <div class="header bg-white p-4 flex items-center justify-between max-w-screen-lg mx-auto">
        <div class="logo text-2xl font-bold text-blue-600">
            TaskLink
        </div>

       
        <nav class="hidden md:flex space-x-6">
            <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">Browse Services</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">Providers</a>
            <a href="#" class="text-gray-700 hover:text-blue-600">Contact Us</a>
        </nav>

        
        <div class="hidden md:flex space-x-4">
            <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Register</button>
            <button
                class="px-4 py-2 border border-blue-600 text-blue-600 rounded hover:bg-blue-600 hover:text-white">Login</button>
        </div>

       
        <button class="md:hidden flex items-center text-gray-700" @click="toggleMobileMenu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 6h16.5m-16.5 6h16.5" />
            </svg>
        </button>

        <!-- Mobile Menu -->
        <div v-if="mobileMenuOpen" class="absolute top-16 left-0 w-full bg-white p-4 md:hidden">
            <a href="#" class="block text-gray-700 hover:text-blue-600 mb-4">Home</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 mb-4">Browse Services</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 mb-4">Providers</a>
            <a href="#" class="block text-gray-700 hover:text-blue-600 mb-4">Contact Us</a>
            <button
                class="block w-full px-4 py-2 bg-blue-600 text-white rounded mb-2 hover:bg-blue-700">Register</button>
            <button
                class="block w-full px-4 py-2 border border-blue-600 text-blue-600 rounded hover:bg-blue-600 hover:text-white">Login</button>
        </div>
    </div>
</template>


<script>
export default {
    name: "HeaderComponent",
    data() {
        return {
            mobileMenuOpen: false,
        };
    },
    methods: {
        toggleMobileMenu() {
            this.mobileMenuOpen = !this.mobileMenuOpen;
        },
    },
};
</script>
