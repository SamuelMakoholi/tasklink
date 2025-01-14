<script setup>
import { ref } from 'vue';

// Example navigation items
const navItems = ref([
    { name: 'Dashboard', route: 'dashboard' },
    { name: 'Profile', route: 'profile.show' },
    { name: 'Settings', route: 'settings' },
]);
</script>

<template>
    <div class="w-64 h-full bg-gray-800 text-white fixed">
        <div class="px-4 py-4 font-bold text-lg">
            TaskLink App
        </div>
        <ul>
            <li v-for="item in navItems" :key="item.name" class="py-2 px-4 hover:bg-gray-700">
                <Link :href="route(item.route)" class="block">{{ item.name }}</Link>
            </li>
        </ul>
    </div>
</template>

