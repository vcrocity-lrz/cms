<template>
    <div class="h-screen flex flex-col justify-center items-center bg-gray-100">
      <div class="text-center">
        <h1 class="text-6xl font-bold text-red-500">404</h1>
        <p class="mt-4 text-xl text-gray-600">Oops! Page not found.</p>
        <p class="mt-2 text-md text-gray-500">The page you're looking for doesn't exist.</p>
        <div class="mt-6">
          <router-link
            to="/"
            class="px-6 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-700 transition-colors"
          >
            Go Back Home
          </router-link>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  </script>
  
  <style scoped>
  </style>
  