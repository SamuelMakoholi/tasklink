<script setup>
import { ref } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';

const user = ref({
  profilePicture: '/images/user-image.png',
  email: '',
  name: '',
  national_id: '',
  phone: '',
  dob: '',
  address: '',
  gender: '',
});

const updateDetails = () => {
  console.log("Details updated:", user.value);
};

const changeProfilePicture = () => {
  console.log("Change Profile Picture");
};
</script>

<template>
    <AppLayout>
      <template #header>
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
          Personal Details
        </h2>
      </template>

      <!-- Main Container -->
      <div class="max-w-screen-lg mx-auto p-6">
        <div class="flex gap-8 items-start">
          <!-- Profile Picture Section -->
          <div class="flex-shrink-0">
            <img
              :src="user.profilePicture"
              alt="Profile Picture"
              class="w-36 h-36 rounded-full border border-gray-300 object-cover"
            />
            <button
              class="mt-4 text-sm text-blue-600 hover:text-blue-800 underline"
              @click="changeProfilePicture"
            >
              Change Picture
            </button>
          </div>

          <!-- Form Section -->
          <form @submit.prevent="updateDetails" class="flex-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <!-- Email -->
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700">
                  Email
                </label>
                <input
                  type="email"
                  id="email"
                  v-model="user.email"
                  disabled
                  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100"
                />
              </div>

              <!-- Name -->
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700">
                  Name
                </label>
                <input
                  type="text"
                  id="name"
                  v-model="user.name"
                  disabled
                  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100"
                />
              </div>

              <!-- National ID -->
              <div>
                <label for="national_id" class="block text-sm font-medium text-gray-700">
                  National ID
                </label>
                <input
                  type="text"
                  id="national_id"
                  v-model="user.national_id"
                  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm"
                  required
                />
              </div>

              <!-- Phone -->
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">
                  Phone
                </label>
                <input
                  type="text"
                  id="phone"
                  v-model="user.phone"
                  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm"
                  required
                />
              </div>

              <!-- Date of Birth -->
              <div>
                <label for="dob" class="block text-sm font-medium text-gray-700">
                  Date of Birth
                </label>
                <input
                  type="date"
                  id="dob"
                  v-model="user.dob"
                  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm"
                  required
                />
              </div>

              <!-- Address -->
              <div>
                <label for="address" class="block text-sm font-medium text-gray-700">
                  Address
                </label>
                <textarea
                  id="address"
                  v-model="user.address"
                  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm"
                  required
                ></textarea>
              </div>

              <!-- Gender -->
              <div>
                <label for="gender" class="block text-sm font-medium text-gray-700">
                  Gender
                </label>
                <select
                  id="gender"
                  v-model="user.gender"
                  class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm"
                  required
                >
                  <option value="" disabled>Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <!-- Submit Button -->
              <div class="md:col-span-2">
                <button
                  type="submit"
                  class="w-full inline-flex justify-center py-3 px-6 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                  Update Details
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </AppLayout>
  </template>

  <style scoped>
  /* Add custom styles for additional enhancements */
  </style>
