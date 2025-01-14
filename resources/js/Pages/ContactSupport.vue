<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
  <AppLayout title="Contact Us">
    <template #header>
      <h2 class="font-semibold text-3xl text-gray-900 leading-tight">Get in Touch</h2>
    </template>

    <div class="container mx-auto px-6 py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden sm:rounded-lg p-6 bg-white shadow-lg">
          <!-- Contact Information Section -->
          <section class="mb-12">
            <h3 class="text-3xl font-bold text-gray-900 mb-4">Contact Information</h3>
            <p class="text-gray-600 mb-6">
              We would love to hear from you! You can reach us through the following methods:
            </p>
            <ul class="space-y-6 text-lg text-gray-800">
              <li>
                <strong class="text-blue-600">Email:</strong>
                <p>info@example.com</p>
              </li>
              <li>
                <strong class="text-blue-600">Phone:</strong>
                <p>+1 (555) 123-4567</p>
              </li>
              <li>
                <strong class="text-blue-600">Business Hours:</strong>
                <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
              </li>
            </ul>
          </section>

          <section>
            <h3 class="text-3xl font-bold text-gray-900 mb-4">Send Us a Message</h3>
            <form action="#" method="POST" class="space-y-6">
              <div class="space-y-2">
                <label for="name" class="block text-lg text-gray-700">Full Name</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                  placeholder="Your name"
                  required
                />
              </div>

              <div class="space-y-2">
                <label for="email" class="block text-lg text-gray-700">Email Address</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                  placeholder="Your email"
                  required
                />
              </div>

              <div class="space-y-2">
                <label for="message" class="block text-lg text-gray-700">Your Message</label>
                <textarea
                  id="message"
                  name="message"
                  rows="6"
                  class="w-full px-5 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                  placeholder="Your message"
                  required
                ></textarea>
              </div>

              <div>
                <button
                  type="submit"
                  class="w-full py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-200"
                >
                  Send Message
                </button>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </AppLayout>
</template>


