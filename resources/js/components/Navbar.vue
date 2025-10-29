<template>
  <nav class="fixed top-0 left-0 w-full bg-pink-400 text-white shadow-md z-50">
    <div class="w-full flex justify-between items-center px-2 py-3">
      
      <!-- 🔹 Logo -->
      <div class="bg-white p-2 rounded-xl shadow-md flex items-center ml-2">
        <img src="/images/logo.png" alt="Logo" class="h-10 w-auto" />
      </div>

      <!-- 🔹 Menu Navigasi -->
      <ul class="flex space-x-4">
        <li>
          <a
            href="/"
            class="bg-blue-400 hover:bg-blue-500 text-white px-3 py-1 rounded-md transition"
          >
            Beranda
          </a>
        </li>
        <li>
          <a
            href="/cek-status"
            class="bg-blue-400 hover:bg-blue-500 text-white px-3 py-1 rounded-md transition"
          >
            Cek Status
          </a>
        </li>
        <li>
          <a
            href="/reservasi"
            class="bg-blue-400 hover:bg-blue-500 text-white px-3 py-1 rounded-md transition"
          >
            Reservasi
          </a>
        </li>
      </ul>

      <!-- 🔹 Ikon Akun (pakai gambar profile.png) -->
      <div class="p-1 rounded-full bg-white shadow-md cursor-pointer mr-2 hover:scale-105 transition">
        <img
          src="/images/profile.png"
          alt="Profile"
          class="h-8 w-8 rounded-full object-cover"
        />
      </div>
    </div>
  </nav>
</template>

<script setup>
// Tidak butuh script khusus untuk navbar statis ini
</script>

<style scoped>
nav {
  font-family: "Poppins", sans-serif;
}
</style>
