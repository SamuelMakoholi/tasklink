<script setup>
import HeaderComponent from '../Frontend/Layouts/HeaderComponent.vue';

import { ref } from 'vue';

// Sample data for featured service providers
const featuredProviders = [
    { name: 'John Doe', service: 'Plumber', image: '/images/user-image.png' },
    { name: 'Jane Smith', service: 'Electrician', image: '/images/user-image.png' },
    { name: 'Mike Johnson', service: 'Carpenter', image: '/images/user-image.png' },
];

// Sample data for services offered
const services = [
    { title: 'Plumbing', description: 'Professional plumbing services for all your needs.' },
    { title: 'Electrical Work', description: 'Experienced electricians for residential and commercial needs.' },
    { title: 'Carpentry', description: 'Skilled carpenters for home and office projects.' },
    { title: 'Gardening', description: 'Expert gardeners to transform your outdoor space.' },
];
</script>

<template>
    <div>
        <HeaderComponent title="TaskLink"/>

        <!-- Hero Section -->
        <div class="hero py-12 flex items-center max-w-screen-lg mx-auto">
            <!-- Text Section -->
            <div class="text-section flex-1">
                <h1 class="text-4xl font-bold text-gray-800 mb-6">
                    Find the Best Service Providers Near You
                </h1>
                <p class="text-gray-600 text-lg mb-6">
                    TaskLink connects you with trusted professionals, from gardeners to carpenters, making it easy to get the services you need.
                </p>
                <button class="px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Explore Services
                </button>
            </div>

            <!-- Image Section with Motion Effect -->
            <div class="image-section flex-1 flex justify-center overflow-hidden">
                <img 
                    src="/images/banner-removebg-preview.png" 
                    alt="Service Providers" 
                    class="rounded transform transition-all duration-1000 ease-in-out slide-in-left"
                />
            </div>
        </div>

        <!-- Featured Listings Section -->
        <section class="py-12 bg-gray-50">
            <div class="container  max-w-screen-lg mx-auto text-center">
                <h2 class="text-3xl font-bold mb-8">Featured Service Providers</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div v-for="(provider, index) in featuredProviders" :key="index" class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img :src="provider.image" alt="Provider Image" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800">{{ provider.name }}</h3>
                            <p class="text-gray-600">{{ provider.service }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-12">
            <div class="container max-w-screen-lg mx-auto text-center">
                <h2 class="text-3xl font-bold mb-8">Our Services</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div v-for="(service, index) in services" :key="index" class="bg-white shadow-lg rounded-lg p-6">
                        <h3 class="text-xl font-semibold text-gray-800">{{ service.title }}</h3>
                        <p class="text-gray-600">{{ service.description }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Optional "Why Choose Us" Section -->
        <section class="py-12 bg-gray-50">
            <div class="container  max-w-screen-lg mx-auto text-center">
                <h2 class="text-3xl font-bold mb-8">Why Choose Us</h2>
                <p class="text-lg text-gray-600 mb-6">
                    TaskLink connects you with trusted professionals, making it easy to find the right service provider for your needs.
                </p>
                <button class="px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Learn More
                </button>
            </div>
        </section>

    </div>
</template>

<style scoped>
/* Motion effect for sliding from the left */
@keyframes slideInRight {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(0);
    }
}

.image-section img {
    animation: slideInRight 1s ease-in-out forwards;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .hero {
        flex-direction: column; /* Stack text and image on smaller screens */
        text-align: center;
    }
    
    .text-section {
        margin-bottom: 1.5rem;
    }
    
    .image-section img {
        width: 100%;
        max-width: 500px; /* Adjust image size for smaller screens */
    }
}
</style>
