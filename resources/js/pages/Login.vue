<template>
    <div class="min-h-screen flex flex-col items-center justify-center bg-white relative">
      <div class="bg-white border border-gray-300 rounded-xl shadow-md p-8 w-full max-w-md relative">
        
        <!-- 🔹 Icon User -->
        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-white border-2 border-gray-300 rounded-full w-16 h-16 flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5.121 17.804A9 9 0 1118.879 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
        </div>
  
        <!-- 🔹 Toggle -->
        <div class="flex justify-center mb-6 mt-8">
          <button
            class="bg-blue-200 text-gray-600 font-semibold px-5 py-2 rounded-l-md"
            @click="goToRegister"
          >
            SIGNUP
          </button>
          <button
            class="bg-blue-500 text-white font-semibold px-5 py-2 rounded-r-md"
          >
            LOGIN
          </button>
        </div>
  
        <!-- 🔹 Form Login -->
        <form @submit.prevent="handleLogin">
          <div class="space-y-4">
            <div>
              <label class="block text-sm font-bold text-gray-800 mb-1">Username</label>
              <input
                v-model="form.username"
                type="text"
                placeholder="Masukkan username"
                required
                class="w-full border border-gray-400 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300 text-gray-800"
                autocomplete="off"
                />
            </div>
  
            <div>
              <label class="block text-sm font-bold text-gray-800 mb-1">Password</label>
              <input
                v-model="form.password"
                type="password"
                placeholder="Masukkan password"
                required
                class="w-full border border-gray-400 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300 text-gray-800"
                autocomplete="off"
                />
            </div>
  
            <div class="flex items-center">
              <input id="remember" type="checkbox" v-model="form.remember" class="mr-2" />
              <label for="remember" class="text-sm text-gray-700">Ingat saya</label>
            </div>
          </div>
  
          <button
            type="submit"
            class="w-full mt-6 bg-pink-400 text-white font-bold py-2 rounded-md hover:bg-pink-500 transition"
          >
            LOGIN
          </button>
        </form>
  
        <p class="text-center text-sm text-gray-600 mt-4">
          Belum punya akun?
          <a @click.prevent="goToRegister" href="#" class="text-pink-500 font-semibold hover:underline">
            Daftar sekarang
          </a>
        </p>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue'
  import { router } from '@inertiajs/vue3'
  
  const form = ref({
    username: '',
    password: '',
    remember: false,
  })
  
  function handleLogin() {
    alert('Login berhasil! Selamat datang 👋')
    router.visit('/dashboard')
  }
  
  function goToRegister() {
    router.visit('/masuk')
  }
  </script>
  